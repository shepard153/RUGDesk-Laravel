@extends('dashboard/dashboard_template')

@section('sidebar')
  @parent

@endsection

@section('content')
  <div class="col rounded shadow" style="background: white; padding: 1vw 1vw 0.5vw 1vw;">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @elseif (session()->has('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
    @endif
    <form class="row" method="post" action="{{ route('setSettings') }}">
      @csrf
      <div class="col-sm-4 col-md-4">
        <p class="fs-4 border-bottom" style="padding: 0vw 0vw 0.6vw 0vw;">{{ __('dashboard_settings.dashboard') }}</p>
        <div class="mb-3">
          <label for="dashboard_refreshTime" class="form-label">{{ __('dashboard_settings.dashboard_refresh_time') }}</label>
          <input type="text" class="form-control" name="dashboard_refreshTime" value="{{ $settings['dashboard_refreshTime'] }}">
        </div>
        <div class="mb-3">
          <label for="dashboard_newestToDisplay" class="form-label">{{ __('dashboard_settings.tickets_count') }}</label>
          <input type="text" class="form-control" name="dashboard_newestToDisplay" value="{{ $settings['dashboard_newestToDisplay'] }}">
        </div>
        <div class="mb-3">
          <label for="dashboard_chartDaySpan" class="form-label">{{ __('dashboard_settings.chart_day_span') }}</label>
          <input type="text" class="form-control" name="dashboard_chartDaySpan" value="{{ $settings['dashboard_chartDaySpan'] }}">
        </div>
      </div>
      <div class="col-sm-4 col-md-4">
        <p class="fs-4 border-bottom" style="padding: 0vw 0vw 0.6vw 0vw;">{{ __('dashboard_settings.tickets') }}</p>
        <div class="mb-3">
          <label for="tickets_pagination" class="form-label">{{ __('dashboard_settings.pagination_items') }}</label>
          <input type="text" class="form-control" name="tickets_pagination" value="{{ $settings['tickets_pagination'] }}">
        </div>
      </div>
      <div class="mb-3">
        <input name="submit" class="btn btn-primary" type="Submit" value="{{ __('dashboard_settings.save_changes') }}"/>
      </div>
    </form>
  </div>
@endsection
