@extends('admin.welcome')

@section('content')
<div class="col">

    <!-- Chart's container -->
    <div id="money-month" style="height: 500px;color:white"></div>
    <!-- Charting library -->
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
    <!-- Your application script -->

</div>
@endsection


@push('js')
<!-- Page specific script -->
<script>
    // import { Chartisan, ChartisanHooks } from '@chartisan/chartjs'
    const hooks = new ChartisanHooks()
    const chart = new Chartisan({
        el: '#money-month',
        url: "@chart('money_month_chart')",
        hooks: new ChartisanHooks()
            .colors(['#40BCD8','#40BCD8'])
      });
</script>
@endpush