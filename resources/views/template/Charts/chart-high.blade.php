@extends('layouts.master')

@section('content')

<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12 col-lg-6">
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Basic line Chart</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <div id="high-basicline-chart"></div>
                </div>
             </div>
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Column and Bar Chart</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <div id="high-columnndbar-chart"></div>
                </div>
             </div>
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Pie Chart</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <div id="high-pie-chart"></div>
                </div>
             </div>
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Dynamic Chart</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <div id="high-dynamic-chart"></div>
                </div>
             </div>
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Gauges Chart</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <div id="high-gauges-chart"></div>
                </div>
             </div>
          </div>
          <div class="col-sm-12 col-lg-6">
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Area Chart</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <div id="high-area-chart"></div>
                </div>
             </div>
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Scatter plot Chart</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <div id="high-scatterplot-chart"></div>
                </div>
             </div>
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Dual axes, line and column Chart</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <div id="high-linendcolumn-chart"></div>
                </div>
             </div>
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">3D Chart</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <div id="high-3d-chart"></div>
                </div>
             </div>
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Bar With Nagative Chart</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <div id="high-barwithnagative-chart"></div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

@endsection
