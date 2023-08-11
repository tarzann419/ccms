@extends('inec.dashboard')
@section('inec')



<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-success">Welcome @INEC ADMIN! 🎉</h5>
                            <p class="mb-4">
                                There's <span class="fw-bold">work</span> to be done. Get to it now
                            </p>

                            <a href="{{ route('register.voter') }}" class="btn btn-sm btn-outline-success">Register Voters Now</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Revenue -->
        <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Total Voters</h5>
                        <div id="totalRevenueChart" class="px-2" style="min-height: 315px;">
                            <div id="apexchartsntlcpy25" class="apexcharts-canvas apexchartsntlcpy25 apexcharts-theme-light" style="width: 432px; height: 300px;"><svg id="SvgjsSvg1639" width="432" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                    <foreignObject x="0" y="0" width="432" height="300">
                                        <div class="apexcharts-legend apexcharts-align-left apx-legend-position-top" xmlns="http://www.w3.org/1999/xhtml" style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 150px;">
                                            <div class="apexcharts-legend-series" rel="1" seriesname="2021" data:collapsed="false" style="margin: 2px 10px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="2021" data:collapsed="false" style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2021</span></div>
                                            <div class="apexcharts-legend-series" rel="2" seriesname="2020" data:collapsed="false" style="margin: 2px 10px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(3, 195, 236) !important; color: rgb(3, 195, 236); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="2020" data:collapsed="false" style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2020</span></div>
                                        </div>
                                        <style type="text/css">
                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                            .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: inline-block;
                                                cursor: pointer;
                                                margin-right: 3px;
                                                border-style: solid;
                                            }

                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                display: inline-block;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <g id="SvgjsG1641" class="apexcharts-inner apexcharts-graphical" transform="translate(53.7890625, 52)">
                                        <defs id="SvgjsDefs1640">
                                            <linearGradient id="SvgjsLinearGradient1645" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1646" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                <stop id="SvgjsStop1647" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop1648" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            </linearGradient>
                                            <clipPath id="gridRectMaskntlcpy25">
                                                <rect id="SvgjsRect1650" width="368.2109375" height="222.73" x="-5" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskntlcpy25"></clipPath>
                                            <clipPath id="nonForecastMaskntlcpy25"></clipPath>
                                            <clipPath id="gridRectMarkerMaskntlcpy25">
                                                <rect id="SvgjsRect1651" width="362.2109375" height="220.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect id="SvgjsRect1649" width="18.934006696428572" height="216.73" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1645)" class="apexcharts-xcrosshairs" y2="216.73" filter="none" fill-opacity="0.9"></rect>
                                        <g id="SvgjsG1671" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1672" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1674" font-family="Helvetica, Arial, sans-serif" x="25.586495535714285" y="245.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1675">Jan</tspan>
                                                    <title>Jan</title>
                                                </text><text id="SvgjsText1677" font-family="Helvetica, Arial, sans-serif" x="76.75948660714286" y="245.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1678">Feb</tspan>
                                                    <title>Feb</title>
                                                </text><text id="SvgjsText1680" font-family="Helvetica, Arial, sans-serif" x="127.93247767857144" y="245.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1681">Mar</tspan>
                                                    <title>Mar</title>
                                                </text><text id="SvgjsText1683" font-family="Helvetica, Arial, sans-serif" x="179.10546875" y="245.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1684">Apr</tspan>
                                                    <title>Apr</title>
                                                </text><text id="SvgjsText1686" font-family="Helvetica, Arial, sans-serif" x="230.27845982142856" y="245.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1687">May</tspan>
                                                    <title>May</title>
                                                </text><text id="SvgjsText1689" font-family="Helvetica, Arial, sans-serif" x="281.4514508928571" y="245.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1690">Jun</tspan>
                                                    <title>Jun</title>
                                                </text><text id="SvgjsText1692" font-family="Helvetica, Arial, sans-serif" x="332.62444196428567" y="245.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1693">Jul</tspan>
                                                    <title>Jul</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1708" class="apexcharts-grid">
                                            <g id="SvgjsG1709" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1711" x1="0" y1="0" x2="358.2109375" y2="0" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1712" x1="0" y1="43.346" x2="358.2109375" y2="43.346" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1713" x1="0" y1="86.692" x2="358.2109375" y2="86.692" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1714" x1="0" y1="130.03799999999998" x2="358.2109375" y2="130.03799999999998" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1715" x1="0" y1="173.384" x2="358.2109375" y2="173.384" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1716" x1="0" y1="216.73" x2="358.2109375" y2="216.73" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1710" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine1718" x1="0" y1="216.73" x2="358.2109375" y2="216.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1717" x1="0" y1="1" x2="0" y2="216.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1652" class="apexcharts-bar-series apexcharts-plot-series">
                                            <g id="SvgjsG1653" class="apexcharts-series" seriesName="2021" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1655" d="M 16.1194921875 120.03800000000001L 16.1194921875 62.01520000000002Q 16.1194921875 52.01520000000002 26.1194921875 52.01520000000002L 19.05349888392857 52.01520000000002Q 29.05349888392857 52.01520000000002 29.05349888392857 62.01520000000002L 29.05349888392857 62.01520000000002L 29.05349888392857 120.03800000000001Q 29.05349888392857 130.038 19.05349888392857 130.038L 26.1194921875 130.038Q 16.1194921875 130.038 16.1194921875 120.03800000000001z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskntlcpy25)" pathTo="M 16.1194921875 120.03800000000001L 16.1194921875 62.01520000000002Q 16.1194921875 52.01520000000002 26.1194921875 52.01520000000002L 19.05349888392857 52.01520000000002Q 29.05349888392857 52.01520000000002 29.05349888392857 62.01520000000002L 29.05349888392857 62.01520000000002L 29.05349888392857 120.03800000000001Q 29.05349888392857 130.038 19.05349888392857 130.038L 26.1194921875 130.038Q 16.1194921875 130.038 16.1194921875 120.03800000000001z" pathFrom="M 16.1194921875 120.03800000000001L 16.1194921875 120.03800000000001L 29.05349888392857 120.03800000000001L 29.05349888392857 120.03800000000001L 29.05349888392857 120.03800000000001L 29.05349888392857 120.03800000000001L 29.05349888392857 120.03800000000001L 16.1194921875 120.03800000000001" cy="52.01520000000002" cx="64.29248325892857" j="0" val="18" barHeight="78.02279999999999" barWidth="18.934006696428572"></path>
                                                <path id="SvgjsPath1656" d="M 67.29248325892857 120.03800000000001L 67.29248325892857 109.69580000000002Q 67.29248325892857 99.69580000000002 77.29248325892857 99.69580000000002L 70.22648995535714 99.69580000000002Q 80.22648995535714 99.69580000000002 80.22648995535714 109.69580000000002L 80.22648995535714 109.69580000000002L 80.22648995535714 120.03800000000001Q 80.22648995535714 130.038 70.22648995535714 130.038L 77.29248325892857 130.038Q 67.29248325892857 130.038 67.29248325892857 120.03800000000001z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskntlcpy25)" pathTo="M 67.29248325892857 120.03800000000001L 67.29248325892857 109.69580000000002Q 67.29248325892857 99.69580000000002 77.29248325892857 99.69580000000002L 70.22648995535714 99.69580000000002Q 80.22648995535714 99.69580000000002 80.22648995535714 109.69580000000002L 80.22648995535714 109.69580000000002L 80.22648995535714 120.03800000000001Q 80.22648995535714 130.038 70.22648995535714 130.038L 77.29248325892857 130.038Q 67.29248325892857 130.038 67.29248325892857 120.03800000000001z" pathFrom="M 67.29248325892857 120.03800000000001L 67.29248325892857 120.03800000000001L 80.22648995535714 120.03800000000001L 80.22648995535714 120.03800000000001L 80.22648995535714 120.03800000000001L 80.22648995535714 120.03800000000001L 80.22648995535714 120.03800000000001L 67.29248325892857 120.03800000000001" cy="99.69580000000002" cx="115.46547433035714" j="1" val="7" barHeight="30.3422" barWidth="18.934006696428572"></path>
                                                <path id="SvgjsPath1657" d="M 118.46547433035714 120.03800000000001L 118.46547433035714 75.01900000000002Q 118.46547433035714 65.01900000000002 128.46547433035715 65.01900000000002L 121.39948102678571 65.01900000000002Q 131.3994810267857 65.01900000000002 131.3994810267857 75.01900000000002L 131.3994810267857 75.01900000000002L 131.3994810267857 120.03800000000001Q 131.3994810267857 130.038 121.39948102678571 130.038L 128.46547433035715 130.038Q 118.46547433035714 130.038 118.46547433035714 120.03800000000001z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskntlcpy25)" pathTo="M 118.46547433035714 120.03800000000001L 118.46547433035714 75.01900000000002Q 118.46547433035714 65.01900000000002 128.46547433035715 65.01900000000002L 121.39948102678571 65.01900000000002Q 131.3994810267857 65.01900000000002 131.3994810267857 75.01900000000002L 131.3994810267857 75.01900000000002L 131.3994810267857 120.03800000000001Q 131.3994810267857 130.038 121.39948102678571 130.038L 128.46547433035715 130.038Q 118.46547433035714 130.038 118.46547433035714 120.03800000000001z" pathFrom="M 118.46547433035714 120.03800000000001L 118.46547433035714 120.03800000000001L 131.3994810267857 120.03800000000001L 131.3994810267857 120.03800000000001L 131.3994810267857 120.03800000000001L 131.3994810267857 120.03800000000001L 131.3994810267857 120.03800000000001L 118.46547433035714 120.03800000000001" cy="65.01900000000002" cx="166.6384654017857" j="2" val="15" barHeight="65.01899999999999" barWidth="18.934006696428572"></path>
                                                <path id="SvgjsPath1658" d="M 169.6384654017857 120.03800000000001L 169.6384654017857 14.334600000000023Q 169.6384654017857 4.334600000000023 179.6384654017857 4.334600000000023L 172.5724720982143 4.334600000000023Q 182.5724720982143 4.334600000000023 182.5724720982143 14.334600000000023L 182.5724720982143 14.334600000000023L 182.5724720982143 120.03800000000001Q 182.5724720982143 130.038 172.5724720982143 130.038L 179.6384654017857 130.038Q 169.6384654017857 130.038 169.6384654017857 120.03800000000001z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskntlcpy25)" pathTo="M 169.6384654017857 120.03800000000001L 169.6384654017857 14.334600000000023Q 169.6384654017857 4.334600000000023 179.6384654017857 4.334600000000023L 172.5724720982143 4.334600000000023Q 182.5724720982143 4.334600000000023 182.5724720982143 14.334600000000023L 182.5724720982143 14.334600000000023L 182.5724720982143 120.03800000000001Q 182.5724720982143 130.038 172.5724720982143 130.038L 179.6384654017857 130.038Q 169.6384654017857 130.038 169.6384654017857 120.03800000000001z" pathFrom="M 169.6384654017857 120.03800000000001L 169.6384654017857 120.03800000000001L 182.5724720982143 120.03800000000001L 182.5724720982143 120.03800000000001L 182.5724720982143 120.03800000000001L 182.5724720982143 120.03800000000001L 182.5724720982143 120.03800000000001L 169.6384654017857 120.03800000000001" cy="4.334600000000023" cx="217.81145647321426" j="3" val="29" barHeight="125.70339999999999" barWidth="18.934006696428572"></path>
                                                <path id="SvgjsPath1659" d="M 220.81145647321426 120.03800000000001L 220.81145647321426 62.01520000000002Q 220.81145647321426 52.01520000000002 230.81145647321426 52.01520000000002L 223.74546316964285 52.01520000000002Q 233.74546316964285 52.01520000000002 233.74546316964285 62.01520000000002L 233.74546316964285 62.01520000000002L 233.74546316964285 120.03800000000001Q 233.74546316964285 130.038 223.74546316964285 130.038L 230.81145647321426 130.038Q 220.81145647321426 130.038 220.81145647321426 120.03800000000001z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskntlcpy25)" pathTo="M 220.81145647321426 120.03800000000001L 220.81145647321426 62.01520000000002Q 220.81145647321426 52.01520000000002 230.81145647321426 52.01520000000002L 223.74546316964285 52.01520000000002Q 233.74546316964285 52.01520000000002 233.74546316964285 62.01520000000002L 233.74546316964285 62.01520000000002L 233.74546316964285 120.03800000000001Q 233.74546316964285 130.038 223.74546316964285 130.038L 230.81145647321426 130.038Q 220.81145647321426 130.038 220.81145647321426 120.03800000000001z" pathFrom="M 220.81145647321426 120.03800000000001L 220.81145647321426 120.03800000000001L 233.74546316964285 120.03800000000001L 233.74546316964285 120.03800000000001L 233.74546316964285 120.03800000000001L 233.74546316964285 120.03800000000001L 233.74546316964285 120.03800000000001L 220.81145647321426 120.03800000000001" cy="52.01520000000002" cx="268.9844475446428" j="4" val="18" barHeight="78.02279999999999" barWidth="18.934006696428572"></path>
                                                <path id="SvgjsPath1660" d="M 271.9844475446428 120.03800000000001L 271.9844475446428 88.02280000000002Q 271.9844475446428 78.02280000000002 281.9844475446428 78.02280000000002L 274.9184542410714 78.02280000000002Q 284.9184542410714 78.02280000000002 284.9184542410714 88.02280000000002L 284.9184542410714 88.02280000000002L 284.9184542410714 120.03800000000001Q 284.9184542410714 130.038 274.9184542410714 130.038L 281.9844475446428 130.038Q 271.9844475446428 130.038 271.9844475446428 120.03800000000001z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskntlcpy25)" pathTo="M 271.9844475446428 120.03800000000001L 271.9844475446428 88.02280000000002Q 271.9844475446428 78.02280000000002 281.9844475446428 78.02280000000002L 274.9184542410714 78.02280000000002Q 284.9184542410714 78.02280000000002 284.9184542410714 88.02280000000002L 284.9184542410714 88.02280000000002L 284.9184542410714 120.03800000000001Q 284.9184542410714 130.038 274.9184542410714 130.038L 281.9844475446428 130.038Q 271.9844475446428 130.038 271.9844475446428 120.03800000000001z" pathFrom="M 271.9844475446428 120.03800000000001L 271.9844475446428 120.03800000000001L 284.9184542410714 120.03800000000001L 284.9184542410714 120.03800000000001L 284.9184542410714 120.03800000000001L 284.9184542410714 120.03800000000001L 284.9184542410714 120.03800000000001L 271.9844475446428 120.03800000000001" cy="78.02280000000002" cx="320.1574386160714" j="5" val="12" barHeight="52.01519999999999" barWidth="18.934006696428572"></path>
                                                <path id="SvgjsPath1661" d="M 323.1574386160714 120.03800000000001L 323.1574386160714 101.02660000000002Q 323.1574386160714 91.02660000000002 333.1574386160714 91.02660000000002L 326.09144531249996 91.02660000000002Q 336.09144531249996 91.02660000000002 336.09144531249996 101.02660000000002L 336.09144531249996 101.02660000000002L 336.09144531249996 120.03800000000001Q 336.09144531249996 130.038 326.09144531249996 130.038L 333.1574386160714 130.038Q 323.1574386160714 130.038 323.1574386160714 120.03800000000001z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskntlcpy25)" pathTo="M 323.1574386160714 120.03800000000001L 323.1574386160714 101.02660000000002Q 323.1574386160714 91.02660000000002 333.1574386160714 91.02660000000002L 326.09144531249996 91.02660000000002Q 336.09144531249996 91.02660000000002 336.09144531249996 101.02660000000002L 336.09144531249996 101.02660000000002L 336.09144531249996 120.03800000000001Q 336.09144531249996 130.038 326.09144531249996 130.038L 333.1574386160714 130.038Q 323.1574386160714 130.038 323.1574386160714 120.03800000000001z" pathFrom="M 323.1574386160714 120.03800000000001L 323.1574386160714 120.03800000000001L 336.09144531249996 120.03800000000001L 336.09144531249996 120.03800000000001L 336.09144531249996 120.03800000000001L 336.09144531249996 120.03800000000001L 336.09144531249996 120.03800000000001L 323.1574386160714 120.03800000000001" cy="91.02660000000002" cx="371.33042968749993" j="6" val="9" barHeight="39.011399999999995" barWidth="18.934006696428572"></path>
                                            </g>
                                            <g id="SvgjsG1662" class="apexcharts-series" seriesName="2020" rel="2" data:realIndex="1">
                                                <path id="SvgjsPath1664" d="M 16.1194921875 150.038L 16.1194921875 186.3878Q 16.1194921875 196.3878 26.1194921875 196.3878L 19.05349888392857 196.3878Q 29.05349888392857 196.3878 29.05349888392857 186.3878L 29.05349888392857 186.3878L 29.05349888392857 150.038Q 29.05349888392857 140.038 19.05349888392857 140.038L 26.1194921875 140.038Q 16.1194921875 140.038 16.1194921875 150.038z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskntlcpy25)" pathTo="M 16.1194921875 150.038L 16.1194921875 186.3878Q 16.1194921875 196.3878 26.1194921875 196.3878L 19.05349888392857 196.3878Q 29.05349888392857 196.3878 29.05349888392857 186.3878L 29.05349888392857 186.3878L 29.05349888392857 150.038Q 29.05349888392857 140.038 19.05349888392857 140.038L 26.1194921875 140.038Q 16.1194921875 140.038 16.1194921875 150.038z" pathFrom="M 16.1194921875 150.038L 16.1194921875 150.038L 29.05349888392857 150.038L 29.05349888392857 150.038L 29.05349888392857 150.038L 29.05349888392857 150.038L 29.05349888392857 150.038L 16.1194921875 150.038" cy="176.3878" cx="64.29248325892857" j="0" val="-13" barHeight="-56.349799999999995" barWidth="18.934006696428572"></path>
                                                <path id="SvgjsPath1665" d="M 67.29248325892857 150.038L 67.29248325892857 208.0608Q 67.29248325892857 218.0608 77.29248325892857 218.0608L 70.22648995535714 218.0608Q 80.22648995535714 218.0608 80.22648995535714 208.0608L 80.22648995535714 208.0608L 80.22648995535714 150.038Q 80.22648995535714 140.038 70.22648995535714 140.038L 77.29248325892857 140.038Q 67.29248325892857 140.038 67.29248325892857 150.038z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskntlcpy25)" pathTo="M 67.29248325892857 150.038L 67.29248325892857 208.0608Q 67.29248325892857 218.0608 77.29248325892857 218.0608L 70.22648995535714 218.0608Q 80.22648995535714 218.0608 80.22648995535714 208.0608L 80.22648995535714 208.0608L 80.22648995535714 150.038Q 80.22648995535714 140.038 70.22648995535714 140.038L 77.29248325892857 140.038Q 67.29248325892857 140.038 67.29248325892857 150.038z" pathFrom="M 67.29248325892857 150.038L 67.29248325892857 150.038L 80.22648995535714 150.038L 80.22648995535714 150.038L 80.22648995535714 150.038L 80.22648995535714 150.038L 80.22648995535714 150.038L 67.29248325892857 150.038" cy="198.0608" cx="115.46547433035714" j="1" val="-18" barHeight="-78.02279999999999" barWidth="18.934006696428572"></path>
                                                <path id="SvgjsPath1666" d="M 118.46547433035714 150.038L 118.46547433035714 169.0494Q 118.46547433035714 179.0494 128.46547433035715 179.0494L 121.39948102678571 179.0494Q 131.3994810267857 179.0494 131.3994810267857 169.0494L 131.3994810267857 169.0494L 131.3994810267857 150.038Q 131.3994810267857 140.038 121.39948102678571 140.038L 128.46547433035715 140.038Q 118.46547433035714 140.038 118.46547433035714 150.038z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskntlcpy25)" pathTo="M 118.46547433035714 150.038L 118.46547433035714 169.0494Q 118.46547433035714 179.0494 128.46547433035715 179.0494L 121.39948102678571 179.0494Q 131.3994810267857 179.0494 131.3994810267857 169.0494L 131.3994810267857 169.0494L 131.3994810267857 150.038Q 131.3994810267857 140.038 121.39948102678571 140.038L 128.46547433035715 140.038Q 118.46547433035714 140.038 118.46547433035714 150.038z" pathFrom="M 118.46547433035714 150.038L 118.46547433035714 150.038L 131.3994810267857 150.038L 131.3994810267857 150.038L 131.3994810267857 150.038L 131.3994810267857 150.038L 131.3994810267857 150.038L 118.46547433035714 150.038" cy="159.0494" cx="166.6384654017857" j="2" val="-9" barHeight="-39.011399999999995" barWidth="18.934006696428572"></path>
                                                <path id="SvgjsPath1667" d="M 169.6384654017857 150.038L 169.6384654017857 190.7224Q 169.6384654017857 200.7224 179.6384654017857 200.7224L 172.5724720982143 200.7224Q 182.5724720982143 200.7224 182.5724720982143 190.7224L 182.5724720982143 190.7224L 182.5724720982143 150.038Q 182.5724720982143 140.038 172.5724720982143 140.038L 179.6384654017857 140.038Q 169.6384654017857 140.038 169.6384654017857 150.038z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskntlcpy25)" pathTo="M 169.6384654017857 150.038L 169.6384654017857 190.7224Q 169.6384654017857 200.7224 179.6384654017857 200.7224L 172.5724720982143 200.7224Q 182.5724720982143 200.7224 182.5724720982143 190.7224L 182.5724720982143 190.7224L 182.5724720982143 150.038Q 182.5724720982143 140.038 172.5724720982143 140.038L 179.6384654017857 140.038Q 169.6384654017857 140.038 169.6384654017857 150.038z" pathFrom="M 169.6384654017857 150.038L 169.6384654017857 150.038L 182.5724720982143 150.038L 182.5724720982143 150.038L 182.5724720982143 150.038L 182.5724720982143 150.038L 182.5724720982143 150.038L 169.6384654017857 150.038" cy="180.7224" cx="217.81145647321426" j="3" val="-14" barHeight="-60.6844" barWidth="18.934006696428572"></path>
                                                <path id="SvgjsPath1668" d="M 220.81145647321426 150.038L 220.81145647321426 151.711Q 220.81145647321426 161.711 230.81145647321426 161.711L 223.74546316964285 161.711Q 233.74546316964285 161.711 233.74546316964285 151.711L 233.74546316964285 151.711L 233.74546316964285 150.038Q 233.74546316964285 140.038 223.74546316964285 140.038L 230.81145647321426 140.038Q 220.81145647321426 140.038 220.81145647321426 150.038z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskntlcpy25)" pathTo="M 220.81145647321426 150.038L 220.81145647321426 151.711Q 220.81145647321426 161.711 230.81145647321426 161.711L 223.74546316964285 161.711Q 233.74546316964285 161.711 233.74546316964285 151.711L 233.74546316964285 151.711L 233.74546316964285 150.038Q 233.74546316964285 140.038 223.74546316964285 140.038L 230.81145647321426 140.038Q 220.81145647321426 140.038 220.81145647321426 150.038z" pathFrom="M 220.81145647321426 150.038L 220.81145647321426 150.038L 233.74546316964285 150.038L 233.74546316964285 150.038L 233.74546316964285 150.038L 233.74546316964285 150.038L 233.74546316964285 150.038L 220.81145647321426 150.038" cy="141.711" cx="268.9844475446428" j="4" val="-5" barHeight="-21.673" barWidth="18.934006696428572"></path>
                                                <path id="SvgjsPath1669" d="M 271.9844475446428 150.038L 271.9844475446428 203.7262Q 271.9844475446428 213.7262 281.9844475446428 213.7262L 274.9184542410714 213.7262Q 284.9184542410714 213.7262 284.9184542410714 203.7262L 284.9184542410714 203.7262L 284.9184542410714 150.038Q 284.9184542410714 140.038 274.9184542410714 140.038L 281.9844475446428 140.038Q 271.9844475446428 140.038 271.9844475446428 150.038z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskntlcpy25)" pathTo="M 271.9844475446428 150.038L 271.9844475446428 203.7262Q 271.9844475446428 213.7262 281.9844475446428 213.7262L 274.9184542410714 213.7262Q 284.9184542410714 213.7262 284.9184542410714 203.7262L 284.9184542410714 203.7262L 284.9184542410714 150.038Q 284.9184542410714 140.038 274.9184542410714 140.038L 281.9844475446428 140.038Q 271.9844475446428 140.038 271.9844475446428 150.038z" pathFrom="M 271.9844475446428 150.038L 271.9844475446428 150.038L 284.9184542410714 150.038L 284.9184542410714 150.038L 284.9184542410714 150.038L 284.9184542410714 150.038L 284.9184542410714 150.038L 271.9844475446428 150.038" cy="193.7262" cx="320.1574386160714" j="5" val="-17" barHeight="-73.6882" barWidth="18.934006696428572"></path>
                                                <path id="SvgjsPath1670" d="M 323.1574386160714 150.038L 323.1574386160714 195.05700000000002Q 323.1574386160714 205.05700000000002 333.1574386160714 205.05700000000002L 326.09144531249996 205.05700000000002Q 336.09144531249996 205.05700000000002 336.09144531249996 195.05700000000002L 336.09144531249996 195.05700000000002L 336.09144531249996 150.038Q 336.09144531249996 140.038 326.09144531249996 140.038L 333.1574386160714 140.038Q 323.1574386160714 140.038 323.1574386160714 150.038z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskntlcpy25)" pathTo="M 323.1574386160714 150.038L 323.1574386160714 195.05700000000002Q 323.1574386160714 205.05700000000002 333.1574386160714 205.05700000000002L 326.09144531249996 205.05700000000002Q 336.09144531249996 205.05700000000002 336.09144531249996 195.05700000000002L 336.09144531249996 195.05700000000002L 336.09144531249996 150.038Q 336.09144531249996 140.038 326.09144531249996 140.038L 333.1574386160714 140.038Q 323.1574386160714 140.038 323.1574386160714 150.038z" pathFrom="M 323.1574386160714 150.038L 323.1574386160714 150.038L 336.09144531249996 150.038L 336.09144531249996 150.038L 336.09144531249996 150.038L 336.09144531249996 150.038L 336.09144531249996 150.038L 323.1574386160714 150.038" cy="185.05700000000002" cx="371.33042968749993" j="6" val="-15" barHeight="-65.01899999999999" barWidth="18.934006696428572"></path>
                                            </g>
                                            <g id="SvgjsG1654" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG1663" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <line id="SvgjsLine1719" x1="0" y1="0" x2="358.2109375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1720" x1="0" y1="0" x2="358.2109375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1721" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1722" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1723" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <g id="SvgjsG1694" class="apexcharts-yaxis" rel="0" transform="translate(15.7890625, 0)">
                                        <g id="SvgjsG1695" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1696" font-family="Helvetica, Arial, sans-serif" x="20" y="53.5" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1697">30</tspan>
                                                <title>30</title>
                                            </text><text id="SvgjsText1698" font-family="Helvetica, Arial, sans-serif" x="20" y="96.846" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1699">20</tspan>
                                                <title>20</title>
                                            </text><text id="SvgjsText1700" font-family="Helvetica, Arial, sans-serif" x="20" y="140.192" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1701">10</tspan>
                                                <title>10</title>
                                            </text><text id="SvgjsText1702" font-family="Helvetica, Arial, sans-serif" x="20" y="183.538" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1703">0</tspan>
                                                <title>0</title>
                                            </text><text id="SvgjsText1704" font-family="Helvetica, Arial, sans-serif" x="20" y="226.88400000000001" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1705">-10</tspan>
                                                <title>-10</title>
                                            </text><text id="SvgjsText1706" font-family="Helvetica, Arial, sans-serif" x="20" y="270.23" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1707">-20</tspan>
                                                <title>-20</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1642" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(3, 195, 236);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 449px; height: 377px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-success dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        2022
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                        <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="growthChart" style="min-height: 154.875px;">
                            <div id="apexchartspa0h3mtm" class="apexcharts-canvas apexchartspa0h3mtm apexcharts-theme-light" style="width: 448px; height: 154.875px;"><svg id="SvgjsSvg1724" width="448" height="154.875" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                    <g id="SvgjsG1726" class="apexcharts-inner apexcharts-graphical" transform="translate(117, -25)">
                                        <defs id="SvgjsDefs1725">
                                            <clipPath id="gridRectMaskpa0h3mtm">
                                                <rect id="SvgjsRect1728" width="222" height="285" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskpa0h3mtm"></clipPath>
                                            <clipPath id="nonForecastMaskpa0h3mtm"></clipPath>
                                            <clipPath id="gridRectMarkerMaskpa0h3mtm">
                                                <rect id="SvgjsRect1729" width="220" height="287" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient1734" x1="1" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1735" stop-opacity="1" stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                <stop id="SvgjsStop1736" stop-opacity="0.6" stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop>
                                                <stop id="SvgjsStop1737" stop-opacity="0.6" stop-color="rgba(255,255,255,0.6)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient id="SvgjsLinearGradient1745" x1="1" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1746" stop-opacity="1" stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                <stop id="SvgjsStop1747" stop-opacity="0.6" stop-color="rgba(105,108,255,0.6)" offset="0.7"></stop>
                                                <stop id="SvgjsStop1748" stop-opacity="0.6" stop-color="rgba(105,108,255,0.6)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g id="SvgjsG1730" class="apexcharts-radialbar">
                                            <g id="SvgjsG1731">
                                                <g id="SvgjsG1732" class="apexcharts-tracks">
                                                    <g id="SvgjsG1733" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                        <path id="apexcharts-radialbarTrack-0" d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656" fill="none" fill-opacity="1" stroke="rgba(255,255,255,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="17.357317073170734" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"></path>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1739">
                                                    <g id="SvgjsG1744" class="apexcharts-series apexcharts-radial-series" seriesName="Growth" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1749" d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient1745)" stroke-opacity="1" stroke-linecap="butt" stroke-width="17.357317073170734" stroke-dasharray="5" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="234" data:value="78" index="0" j="0" data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"></path>
                                                    </g>
                                                    <circle id="SvgjsCircle1740" r="54.65121951219512" cx="108" cy="108" class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                    <g id="SvgjsG1741" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1742" font-family="Public Sans" x="108" y="123" text-anchor="middle" dominant-baseline="auto" font-size="15px" font-weight="500" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-label" style="font-family: &quot;Public Sans&quot;;">Growth</text><text id="SvgjsText1743" font-family="Public Sans" x="108" y="99" text-anchor="middle" dominant-baseline="auto" font-size="22px" font-weight="500" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">78%</text></g>
                                                </g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1750" x1="0" y1="0" x2="216" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1751" x1="0" y1="0" x2="216" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG1727" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                            </div>
                        </div>
                        <div class="text-center fw-semibold pt-3 mb-2">62% Country Growth</div>


                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 449px; height: 364px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection