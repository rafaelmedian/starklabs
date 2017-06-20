<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://unpkg.com/tachyons@4.7.0/css/tachyons.min.css"/>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
        </div>
        <header class="w-100 bg-white">
          <div class="cover bg-right bg-center-1" style="background-image: url(/img/background-shape__hero@2x.png)">
            <div class="db dt-ns mw8 center w-100 ph3-m mb6">
              <div class="db dt-ns v-mid tl w-50">
                <a href="/" class="dib w2 h2 pa1">
                  <svg width="155px" height="30px" viewBox="0 0 155 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-1.000000, -1.000000)">
                        <g>
                          <g stroke="#F24B3D" stroke-width="1.5">
                            <rect transform="translate(16.000000, 16.000000) rotate(-45.000000) translate(-16.000000, -16.000000) " x="9.47727273" y="1.75"
                              width="13.0454545" height="28.5" rx="2.5"></rect>
                            <rect transform="translate(16.000000, 16.000000) rotate(-315.000000) translate(-16.000000, -16.000000) " x="9.47727273" y="1.75"
                              width="13.0454545" height="28.5" rx="2.5"></rect>
                          </g>
                          <path d="M47.418,9.22 C48.1500037,9.22 48.7949972,9.33399886 49.353,9.562 C49.9110028,9.79000114 50.3849981,10.0689983 50.775,10.399 C51.165002,10.7290016 51.461999,11.0829981 51.666,11.461 C51.870001,11.8390019 51.9779999,12.1779985 51.99,12.478 C52.0020001,12.5860005 51.9660004,12.6789996 51.882,12.757 C51.7979996,12.8350004 51.7020005,12.874 51.594,12.874 L50.856,12.874 C50.7239993,12.874 50.6190004,12.8500002 50.541,12.802 C50.4629996,12.7539998 50.3820004,12.6460008 50.298,12.478 C50.2379997,12.3579994 50.1390007,12.2050009 50.001,12.019 C49.8629993,11.8329991 49.6770012,11.6530009 49.443,11.479 C49.2089988,11.3049991 48.9240017,11.1550006 48.588,11.029 C48.2519983,10.9029994 47.8620022,10.84 47.418,10.84 C47.0819983,10.84 46.7610015,10.8789996 46.455,10.957 C46.1489985,11.0350004 45.8760012,11.1519992 45.636,11.308 C45.3959988,11.4640008 45.2040007,11.6589988 45.06,11.893 C44.9159993,12.1270012 44.844,12.3999984 44.844,12.712 C44.844,13.0240016 44.9129993,13.2879989 45.051,13.504 C45.1890007,13.7200011 45.4109985,13.9149991 45.717,14.089 C46.0230015,14.2630009 46.4099977,14.4219993 46.878,14.566 C47.3460023,14.7100007 47.9159966,14.8719991 48.588,15.052 C49.2720034,15.2320009 49.8509976,15.4299989 50.325,15.646 C50.7990024,15.8620011 51.1859985,16.1049986 51.486,16.375 C51.7860015,16.6450014 52.0049993,16.9569982 52.143,17.311 C52.2810007,17.6650018 52.35,18.0639978 52.35,18.508 C52.35,19.0480027 52.2330012,19.5429977 51.999,19.993 C51.7649988,20.4430022 51.4380021,20.8299984 51.018,21.154 C50.5979979,21.4780016 50.091003,21.7299991 49.497,21.91 C48.902997,22.0900009 48.2400037,22.18 47.508,22.18 C46.8119965,22.18 46.1700029,22.078001 45.582,21.874 C44.9939971,21.669999 44.4900021,21.4060016 44.07,21.082 C43.6499979,20.7579984 43.3170012,20.398002 43.071,20.002 C42.8249988,19.605998 42.6960001,19.2160019 42.684,18.832 C42.684,18.7239995 42.7229996,18.6310004 42.801,18.553 C42.8790004,18.4749996 42.9719995,18.436 43.08,18.436 L43.818,18.436 C43.9380006,18.436 44.0429995,18.4599998 44.133,18.508 C44.2230005,18.5560002 44.3039996,18.6639992 44.376,18.832 C44.4480004,19.0000008 44.5589992,19.182999 44.709,19.381 C44.8590007,19.579001 45.0599987,19.7649991 45.312,19.939 C45.5640013,20.1130009 45.8699982,20.2599994 46.23,20.38 C46.5900018,20.5000006 47.0159975,20.56 47.508,20.56 C47.9280021,20.56 48.3269981,20.5120005 48.705,20.416 C49.0830019,20.3199995 49.4159986,20.1820009 49.704,20.002 C49.9920014,19.8219991 50.2199992,19.6060013 50.388,19.354 C50.5560008,19.1019987 50.64,18.8200016 50.64,18.508 C50.64,18.1959984 50.544001,17.9290011 50.352,17.707 C50.159999,17.4849989 49.8840018,17.2840009 49.524,17.104 C49.1639982,16.9239991 48.7230026,16.7590007 48.201,16.609 C47.6789974,16.4589992 47.0880033,16.3000008 46.428,16.132 C45.827997,15.9759992 45.3180021,15.7870011 44.898,15.565 C44.4779979,15.3429989 44.1360013,15.0880014 43.872,14.8 C43.6079987,14.5119986 43.4190006,14.1940017 43.305,13.846 C43.1909994,13.4979983 43.134,13.120002 43.134,12.712 C43.134,12.2679978 43.2239991,11.8360021 43.404,11.416 C43.5840009,10.9959979 43.8509982,10.6240016 44.205,10.3 C44.5590018,9.97599838 45.0029973,9.71500099 45.537,9.517 C46.0710027,9.31899901 46.6979964,9.22 47.418,9.22 Z M56.922,18.85 C56.922,19.0780011 56.9429998,19.290999 56.985,19.489 C57.0270002,19.687001 57.1019995,19.8579993 57.21,20.002 C57.3180005,20.1460007 57.470999,20.2569996 57.669,20.335 C57.867001,20.4130004 58.1219984,20.452 58.434,20.452 L59.388,20.452 C59.5200007,20.452 59.6339995,20.4999995 59.73,20.596 C59.8260005,20.6920005 59.874,20.8059993 59.874,20.938 L59.874,21.514 C59.874,21.6460007 59.8260005,21.7599995 59.73,21.856 C59.6339995,21.9520005 59.5200007,22 59.388,22 L58.254,22 C57.2099948,22 56.4540023,21.7300027 55.986,21.19 C55.5179977,20.6499973 55.284,19.8700051 55.284,18.85 L55.284,14.188 L53.952,14.188 C53.8199993,14.188 53.7060005,14.1400005 53.61,14.044 C53.5139995,13.9479995 53.466,13.8340007 53.466,13.702 L53.466,13.126 C53.466,12.9939993 53.5139995,12.8800005 53.61,12.784 C53.7060005,12.6879995 53.8199993,12.64 53.952,12.64 L55.284,12.64 L55.284,9.706 C55.284,9.57399934 55.3319995,9.46000048 55.428,9.364 C55.5240005,9.26799952 55.6379993,9.22 55.77,9.22 L56.436,9.22 C56.5680007,9.22 56.6819995,9.26799952 56.778,9.364 C56.8740005,9.46000048 56.922,9.57399934 56.922,9.706 L56.922,12.64 L59.208,12.64 C59.3400007,12.64 59.4539995,12.6879995 59.55,12.784 C59.6460005,12.8800005 59.694,12.9939993 59.694,13.126 L59.694,13.702 C59.694,13.8340007 59.6460005,13.9479995 59.55,14.044 C59.4539995,14.1400005 59.3400007,14.188 59.208,14.188 L56.922,14.188 L56.922,18.85 Z M61.008,19.642 C61.008,19.1619976 61.103999,18.7420018 61.296,18.382 C61.488001,18.0219982 61.7519983,17.7160013 62.088,17.464 C62.4240017,17.2119987 62.8169977,17.0080008 63.267,16.852 C63.7170022,16.6959992 64.1939975,16.5760004 64.698,16.492 L67.236,16.078 L67.236,15.844 C67.236,15.2319969 67.035002,14.7730015 66.633,14.467 C66.230998,14.1609985 65.730003,14.008 65.13,14.008 C64.6019974,14.008 64.2030013,14.103999 63.933,14.296 C63.6629987,14.488001 63.432001,14.7159987 63.24,14.98 C63.1679996,15.0760005 63.0900004,15.1419998 63.006,15.178 C62.9219996,15.2140002 62.8080007,15.232 62.664,15.232 L62.124,15.232 C61.9919993,15.232 61.8750005,15.1840005 61.773,15.088 C61.6709995,14.9919995 61.6259999,14.8780007 61.638,14.746 C61.6620001,14.4819987 61.7669991,14.2120014 61.953,13.936 C62.1390009,13.6599986 62.3909984,13.4140011 62.709,13.198 C63.0270016,12.9819989 63.3929979,12.8050007 63.807,12.667 C64.2210021,12.5289993 64.6619977,12.46 65.13,12.46 C65.6700027,12.46 66.1709977,12.5379992 66.633,12.694 C67.0950023,12.8500008 67.4909983,13.0779985 67.821,13.378 C68.1510016,13.6780015 68.4089991,14.0499978 68.595,14.494 C68.7810009,14.9380022 68.874,15.4479971 68.874,16.024 L68.874,21.514 C68.874,21.6460007 68.8260005,21.7599995 68.73,21.856 C68.6339995,21.9520005 68.5200007,22 68.388,22 L67.722,22 C67.5899993,22 67.4760005,21.9520005 67.38,21.856 C67.2839995,21.7599995 67.236,21.6460007 67.236,21.514 L67.236,20.776 C67.1279995,21.0040011 66.9600011,21.2049991 66.732,21.379 C66.5039989,21.5530009 66.2430015,21.6999994 65.949,21.82 C65.6549985,21.9400006 65.3490016,22.0299997 65.031,22.09 C64.7129984,22.1500003 64.4160014,22.18 64.14,22.18 C63.6719977,22.18 63.2430019,22.1140007 62.853,21.982 C62.462998,21.8499993 62.1330014,21.6730011 61.863,21.451 C61.5929986,21.2289989 61.3830007,20.9620016 61.233,20.65 C61.0829993,20.3379984 61.008,20.0020018 61.008,19.642 Z M64.32,20.632 C64.7520022,20.632 65.1479982,20.5660007 65.508,20.434 C65.8680018,20.3019993 66.1769987,20.1190012 66.435,19.885 C66.6930013,19.6509988 66.8909993,19.3720016 67.029,19.048 C67.1670007,18.7239984 67.236,18.364002 67.236,17.968 L67.236,17.518 L65.112,17.86 C64.3559962,17.9800006 63.7560022,18.1719987 63.312,18.436 C62.8679978,18.7000013 62.646,19.0419979 62.646,19.462 C62.646,19.5940007 62.6759997,19.7259993 62.736,19.858 C62.7960003,19.9900007 62.8919993,20.1159994 63.024,20.236 C63.1560007,20.3560006 63.326999,20.4519996 63.537,20.524 C63.7470011,20.5960004 64.0079984,20.632 64.32,20.632 Z M76.254,12.64 C76.3860007,12.64 76.4999995,12.6879995 76.596,12.784 C76.6920005,12.8800005 76.74,12.9939993 76.74,13.126 L76.74,13.702 C76.74,13.8340007 76.6920005,13.9479995 76.596,14.044 C76.4999995,14.1400005 76.3860007,14.188 76.254,14.188 L75.21,14.188 C73.8299931,14.188 73.14,14.8779931 73.14,16.258 L73.14,21.514 C73.14,21.6460007 73.0920005,21.7599995 72.996,21.856 C72.8999995,21.9520005 72.7860007,22 72.654,22 L71.988,22 C71.8559993,22 71.7420005,21.9520005 71.646,21.856 C71.5499995,21.7599995 71.502,21.6460007 71.502,21.514 L71.502,13.126 C71.502,12.9939993 71.5499995,12.8800005 71.646,12.784 C71.7420005,12.6879995 71.8559993,12.64 71.988,12.64 L72.654,12.64 C72.7860007,12.64 72.8999995,12.6879995 72.996,12.784 C73.0920005,12.8800005 73.14,12.9939993 73.14,13.126 L73.14,13.684 C73.3800012,13.3239982 73.6679983,13.0600008 74.004,12.892 C74.3400017,12.7239992 74.7779973,12.64 75.318,12.64 L76.254,12.64 Z M79.944,18.04 L79.944,21.514 C79.944,21.6460007 79.8960005,21.7599995 79.8,21.856 C79.7039995,21.9520005 79.5900007,22 79.458,22 L78.792,22 C78.6599993,22 78.5460005,21.9520005 78.45,21.856 C78.3539995,21.7599995 78.306,21.6460007 78.306,21.514 L78.306,9.706 C78.306,9.57399934 78.3539995,9.46000048 78.45,9.364 C78.5460005,9.26799952 78.6599993,9.22 78.792,9.22 L79.458,9.22 C79.5900007,9.22 79.7039995,9.26799952 79.8,9.364 C79.8960005,9.46000048 79.944,9.57399934 79.944,9.706 L79.944,15.664 L83.454,12.946 C83.5260004,12.8859997 83.6189994,12.8200004 83.733,12.748 C83.8470006,12.6759996 83.9879992,12.64 84.156,12.64 L85.056,12.64 C85.1760006,12.64 85.2779996,12.6819996 85.362,12.766 C85.4460004,12.8500004 85.488,12.9519994 85.488,13.072 C85.488,13.1320003 85.4790001,13.1889997 85.461,13.243 C85.4429999,13.2970003 85.3860005,13.3599996 85.29,13.432 L80.952,16.816 L85.74,21.226 C85.8120004,21.2980004 85.8599999,21.3579998 85.884,21.406 C85.9080001,21.4540002 85.92,21.5079997 85.92,21.568 C85.92,21.6880006 85.8780004,21.7899996 85.794,21.874 C85.7099996,21.9580004 85.6080006,22 85.488,22 L84.642,22 C84.4619991,22 84.3090006,21.9640004 84.183,21.892 C84.0569994,21.8199996 83.9640003,21.7540003 83.904,21.694 L79.944,18.04 Z M99.078,19.156 L92.832,19.156 L91.896,21.55 C91.8599998,21.6460005 91.7940005,21.7449995 91.698,21.847 C91.6019995,21.9490005 91.4340012,22 91.194,22 L90.528,22 C90.4199995,22 90.3270004,21.9610004 90.249,21.883 C90.1709996,21.8049996 90.132,21.7120005 90.132,21.604 C90.132,21.5439997 90.1559998,21.4600005 90.204,21.352 L94.614,9.994 C94.6740003,9.86199934 94.7639994,9.73000066 94.884,9.598 C95.0040006,9.46599934 95.1839988,9.4 95.424,9.4 L96.504,9.4 C96.7440012,9.4 96.9239994,9.46599934 97.044,9.598 C97.1640006,9.73000066 97.2539997,9.86199934 97.314,9.994 L101.706,21.352 C101.754,21.4600005 101.778,21.5439997 101.778,21.604 C101.778,21.7120005 101.739,21.8049996 101.661,21.883 C101.583,21.9610004 101.490001,22 101.382,22 L100.716,22 C100.475999,22 100.308,21.9490005 100.212,21.847 C100.116,21.7449995 100.05,21.6460005 100.014,21.55 L99.078,19.156 Z M93.462,17.536 L98.448,17.536 L95.964,11.11 L93.462,17.536 Z M105.072,21.514 C105.072,21.6460007 105.024,21.7599995 104.928,21.856 C104.832,21.9520005 104.718001,22 104.586,22 L103.92,22 C103.787999,22 103.674,21.9520005 103.578,21.856 C103.482,21.7599995 103.434,21.6460007 103.434,21.514 L103.434,13.126 C103.434,12.9939993 103.482,12.8800005 103.578,12.784 C103.674,12.6879995 103.787999,12.64 103.92,12.64 L104.586,12.64 C104.718001,12.64 104.832,12.6879995 104.928,12.784 C105.024,12.8800005 105.072,12.9939993 105.072,13.126 L105.072,21.514 Z M105.252,10.732 C105.252,10.8640007 105.204,10.9779995 105.108,11.074 C105.012,11.1700005 104.898001,11.218 104.766,11.218 L103.74,11.218 C103.607999,11.218 103.494,11.1700005 103.398,11.074 C103.302,10.9779995 103.254,10.8640007 103.254,10.732 L103.254,9.706 C103.254,9.57399934 103.302,9.46000048 103.398,9.364 C103.494,9.26799952 103.607999,9.22 103.74,9.22 L104.766,9.22 C104.898001,9.22 105.012,9.26799952 105.108,9.364 C105.204,9.46000048 105.252,9.57399934 105.252,9.706 L105.252,10.732 Z M120.174,20.38 C120.306001,20.38 120.42,20.4279995 120.516,20.524 C120.612,20.6200005 120.66,20.7339993 120.66,20.866 L120.66,21.514 C120.66,21.6460007 120.612,21.7599995 120.516,21.856 C120.42,21.9520005 120.306001,22 120.174,22 L112.848,22 C112.715999,22 112.602,21.9520005 112.506,21.856 C112.41,21.7599995 112.362,21.6460007 112.362,21.514 L112.362,9.886 C112.362,9.75399934 112.41,9.64000048 112.506,9.544 C112.602,9.44799952 112.715999,9.4 112.848,9.4 L113.586,9.4 C113.718001,9.4 113.832,9.44799952 113.928,9.544 C114.024,9.64000048 114.072,9.75399934 114.072,9.886 L114.072,20.38 L120.174,20.38 Z M130.236,19.156 L123.99,19.156 L123.054,21.55 C123.018,21.6460005 122.952,21.7449995 122.856,21.847 C122.76,21.9490005 122.592001,22 122.352,22 L121.686,22 C121.577999,22 121.485,21.9610004 121.407,21.883 C121.329,21.8049996 121.29,21.7120005 121.29,21.604 C121.29,21.5439997 121.314,21.4600005 121.362,21.352 L125.772,9.994 C125.832,9.86199934 125.921999,9.73000066 126.042,9.598 C126.162001,9.46599934 126.341999,9.4 126.582,9.4 L127.662,9.4 C127.902001,9.4 128.081999,9.46599934 128.202,9.598 C128.322001,9.73000066 128.412,9.86199934 128.472,9.994 L132.864,21.352 C132.912,21.4600005 132.936,21.5439997 132.936,21.604 C132.936,21.7120005 132.897,21.8049996 132.819,21.883 C132.741,21.9610004 132.648001,22 132.54,22 L131.874,22 C131.633999,22 131.466,21.9490005 131.37,21.847 C131.274,21.7449995 131.208,21.6460005 131.172,21.55 L130.236,19.156 Z M124.62,17.536 L129.606,17.536 L127.122,11.11 L124.62,17.536 Z M136.5,16.276 L136.5,20.38 L140.172,20.38 C140.568002,20.38 140.918998,20.3260005 141.225,20.218 C141.531002,20.1099995 141.785999,19.960001 141.99,19.768 C142.194001,19.575999 142.346999,19.3600012 142.449,19.12 C142.551001,18.8799988 142.602,18.6220014 142.602,18.346 C142.602,18.0819987 142.554,17.8240013 142.458,17.572 C142.362,17.3199987 142.215001,17.098001 142.017,16.906 C141.818999,16.713999 141.567002,16.5610006 141.261,16.447 C140.954998,16.3329994 140.592002,16.276 140.172,16.276 L136.5,16.276 Z M136.5,11.02 L136.5,14.656 L139.92,14.656 C140.724004,14.656 141.326998,14.5000016 141.729,14.188 C142.131002,13.8759984 142.332,13.4260029 142.332,12.838 C142.332,12.2499971 142.131002,11.8000016 141.729,11.488 C141.326998,11.1759984 140.724004,11.02 139.92,11.02 L136.5,11.02 Z M135.276,22 C135.143999,22 135.03,21.9520005 134.934,21.856 C134.838,21.7599995 134.79,21.6460007 134.79,21.514 L134.79,9.886 C134.79,9.75399934 134.838,9.64000048 134.934,9.544 C135.03,9.44799952 135.143999,9.4 135.276,9.4 L140.1,9.4 C140.868004,9.4 141.503997,9.51699883 142.008,9.751 C142.512003,9.98500117 142.913998,10.2729983 143.214,10.615 C143.514001,10.9570017 143.726999,11.325998 143.853,11.722 C143.979001,12.118002 144.042,12.4719984 144.042,12.784 C144.042,13.180002 143.982001,13.5279985 143.862,13.828 C143.741999,14.1280015 143.601001,14.379999 143.439,14.584 C143.276999,14.788001 143.115001,14.9499994 142.953,15.07 C142.790999,15.1900006 142.674,15.2739998 142.602,15.322 C143.058002,15.6340016 143.456998,16.0449975 143.799,16.555 C144.141002,17.0650025 144.312,17.6619966 144.312,18.346 C144.312,18.8020023 144.228001,19.2459978 144.06,19.678 C143.891999,20.1100022 143.643002,20.4999983 143.313,20.848 C142.982998,21.1960017 142.569002,21.4749989 142.071,21.685 C141.572998,21.895001 141.000003,22 140.352,22 L135.276,22 Z M150.666,9.22 C151.398004,9.22 152.042997,9.33399886 152.601,9.562 C153.159003,9.79000114 153.632998,10.0689983 154.023,10.399 C154.413002,10.7290016 154.709999,11.0829981 154.914,11.461 C155.118001,11.8390019 155.226,12.1779985 155.238,12.478 C155.25,12.5860005 155.214,12.6789996 155.13,12.757 C155.046,12.8350004 154.950001,12.874 154.842,12.874 L154.104,12.874 C153.971999,12.874 153.867,12.8500002 153.789,12.802 C153.711,12.7539998 153.63,12.6460008 153.546,12.478 C153.486,12.3579994 153.387001,12.2050009 153.249,12.019 C153.110999,11.8329991 152.925001,11.6530009 152.691,11.479 C152.456999,11.3049991 152.172002,11.1550006 151.836,11.029 C151.499998,10.9029994 151.110002,10.84 150.666,10.84 C150.329998,10.84 150.009002,10.8789996 149.703,10.957 C149.396998,11.0350004 149.124001,11.1519992 148.884,11.308 C148.643999,11.4640008 148.452001,11.6589988 148.308,11.893 C148.163999,12.1270012 148.092,12.3999984 148.092,12.712 C148.092,13.0240016 148.160999,13.2879989 148.299,13.504 C148.437001,13.7200011 148.658998,13.9149991 148.965,14.089 C149.271002,14.2630009 149.657998,14.4219993 150.126,14.566 C150.594002,14.7100007 151.163997,14.8719991 151.836,15.052 C152.520003,15.2320009 153.098998,15.4299989 153.573,15.646 C154.047002,15.8620011 154.433999,16.1049986 154.734,16.375 C155.034002,16.6450014 155.252999,16.9569982 155.391,17.311 C155.529001,17.6650018 155.598,18.0639978 155.598,18.508 C155.598,19.0480027 155.481001,19.5429977 155.247,19.993 C155.012999,20.4430022 154.686002,20.8299984 154.266,21.154 C153.845998,21.4780016 153.339003,21.7299991 152.745,21.91 C152.150997,22.0900009 151.488004,22.18 150.756,22.18 C150.059997,22.18 149.418003,22.078001 148.83,21.874 C148.241997,21.669999 147.738002,21.4060016 147.318,21.082 C146.897998,20.7579984 146.565001,20.398002 146.319,20.002 C146.072999,19.605998 145.944,19.2160019 145.932,18.832 C145.932,18.7239995 145.971,18.6310004 146.049,18.553 C146.127,18.4749996 146.219999,18.436 146.328,18.436 L147.066,18.436 C147.186001,18.436 147.291,18.4599998 147.381,18.508 C147.471,18.5560002 147.552,18.6639992 147.624,18.832 C147.696,19.0000008 147.806999,19.182999 147.957,19.381 C148.107001,19.579001 148.307999,19.7649991 148.56,19.939 C148.812001,20.1130009 149.117998,20.2599994 149.478,20.38 C149.838002,20.5000006 150.263998,20.56 150.756,20.56 C151.176002,20.56 151.574998,20.5120005 151.953,20.416 C152.331002,20.3199995 152.663999,20.1820009 152.952,20.002 C153.240001,19.8219991 153.467999,19.6060013 153.636,19.354 C153.804001,19.1019987 153.888,18.8200016 153.888,18.508 C153.888,18.1959984 153.792001,17.9290011 153.6,17.707 C153.407999,17.4849989 153.132002,17.2840009 152.772,17.104 C152.411998,16.9239991 151.971003,16.7590007 151.449,16.609 C150.926997,16.4589992 150.336003,16.3000008 149.676,16.132 C149.075997,15.9759992 148.566002,15.7870011 148.146,15.565 C147.725998,15.3429989 147.384001,15.0880014 147.12,14.8 C146.855999,14.5119986 146.667001,14.1940017 146.553,13.846 C146.438999,13.4979983 146.382,13.120002 146.382,12.712 C146.382,12.2679978 146.471999,11.8360021 146.652,11.416 C146.832001,10.9959979 147.098998,10.6240016 147.453,10.3 C147.807002,9.97599838 148.250997,9.71500099 148.785,9.517 C149.319003,9.31899901 149.945996,9.22 150.666,9.22 Z"
                            fill="#3F4951"></path>
                        </g>
                      </g>
                    </g>
                  </svg>
                </a>
              </div>
              <nav class="db dtc-ns v-mid tl tr-ns mt2 mt0-ns w-50">
                <a title="Are you a Dev?" href="/" class="f6 fw6 hover-orange link black-70 mr2 mr3-m mr4-l dib">Are you a Dev?</a>
                <a title="Built a bot" href="/" class="f6 fw6 hover-orange link black-70 dib br-pill ba ph4">Build a bot</a>
              </nav>
            </div>

            <div class="db dt-ns mw8 center w-100 ph3-m mb6">
              <div class="fl bt3 pb4-ns pt4 mt4 w-50-l">
                <h1 class="f4 fw6">Let us create your bot to scale your business needs</h1>
                <p>Hire our top-notch team of developers to bring AI and chatbots to your organization.</p>
                <a href="" class="f6 f5-ns dib br-pil">Let us build your bot</a>
              </div>
              <div class="fr w-50-l ">
                litte robot
              </div>
            </div>
          </div>
        </header>


        <section class="w-100 center bg-light-gray pa3 ph5-ns">
          <h1 class="mw8 center tc mt0 f3 tc">Power your business with Artificial Intelligence and Automation</h1>
          <p class="mw7 center tc f5 tc lh-copy">
            We build custom bot solutions for your business either AI or rule based. To automate interactions using powerful data integrations
            that are always on and are cost-effective. Whether it’s streamlining customer service using social media apps, a AI-driven
            personal assistant or workflow automation to address your company specific use cases.
          </p>
        </section>

        <section class="mw8 center ph3-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-third-ns pa2">
              <div class="outline bg-white pv4">
                <h3 class="f3 tc">Built a Messenger Bot</h3>
                <p class="tc">A messenger bot can reach your clients and followers where they are. Get on any platform as Whatsapp, Telegram,
                  etc.
                </p>
              </div>
            </div>
            <div class="fl w-100 w-third-ns pa2">
              <div class="outline bg-white pv4">
                <h3 class="f3 tc">Create a Personal Assistant</h3>
                <p class="tc">
                  Create a Personal Assistant to book your flights and hotels or to do anything you need in seconds. Stop searching online
                  for hours.
                </p>
              </div>
            </div>
            <div class="fl w-100 w-third-ns pa2">
              <div class="outline bg-white pv4">
                <h3 class="f3 tc">Stats & Workflow Automation</h3>
                <p class="tc">Create automated interactions within your apps you use daily. Free yourself from the day-to-day and repetitive
                  tasks.
                </p>
              </div>
            </div>
          </div>
        </section>

        <section class="mt6 w-100 center tc pa3 ph5-ns">
          <div class="">
            <h1 class="mw8 center f3 tc">Power your business with Artificial Intelligence and Automation</h1>
            <p class="mw7 center f5 tc lh-copy">
              We build custom bot solutions for your business either AI or rule based. To automate interactions using powerful data integrations
              that are always on and are cost-effective. Whether it’s streamlining customer service using social media apps, a
              AI-driven personal assistant or workflow automation to address your company specific use cases.
            </p>
          </div>
        </section>


        <section class="mw8 center">
          <article class="pv4 ph3 ph0-1">
            <div class="flex flex-column flex-row-ns">
              <div class="w-100 w-60-ns pr3-ns order-2 order-1-ns">
                <h1 class="f3 mt0 lh-title">Chatbot to connect with your customers</h1>
                <p class="f5 f4-l lh-copy">We now live in a messaging economy. Your customers want to interact with you. You provide the information,engage
                  with them, sell and market your products where they are. Automate the interactions using chatbot to deliver a
                  faster experience that’s always on and cost-effective.</p>
                <a href="" class="br-pill w-100">Build a chatbot</a>
              </div>
              <div class="pl3-ns order-1 order-2-ns mb4 mb0-ns w-100 w-40-ns">
                <img src="" alt="">
              </div>
            </div>
          </article>
          <article class="pv4 ph3 ph0-1">
            <div class="flex flex-column flex-row-ns">
              <div class="pl3-ns order-1 order-2-ns mb4 mb0-ns w-100 w-40-ns">
                <img src="" alt="">
              </div>
              <div class="w-100 w-60-ns pr3-ns order-1 order-2-ns">
                <h1 class="f3 mt0 lh-title">Automate your office workflowss</h1>
                <p class="f5 f4-l lh-copy">A Workflow Automation is like a small and automated robot that takes the drudgery out of manual data entry and
                  tedious tasks. With Stark.ai Workflow Automation, the days of many manual tasks are eliminated! We create the
                  criteria for your robot and tell the robot what to do, and like magic, it’s done.</p>
                <a href="" class="br-pill w-100">Get a workflow</a>
              </div>
            </div>
          </article>
        </section>

        <section class="mt6 mw8 w-100 center">
          <h1 class="mw8 center tc mt0 f3">Custom automated workflows</h1>
          <p class="mw7 center tc mt0">We now live in a messaging economy. Your customers want to chat with you. You provide information, engage them, and sell
            and market to them—where they are.</p>

          <div class="cf ph2-ns">
            <div class="fl w-100 w-third-ns pa2">
              <div class="outline bg-white pv4">
                <h3 class="f3 tc">Built a Messenger Bot</h3>
                <p class="tc">A messenger bot can reach your clients and followers where they are. Get on any platform as Whatsapp, Telegram,
                  etc.
                </p>
              </div>
            </div>
            <div class="fl w-100 w-third-ns pa2">
              <div class="outline bg-white pv4">
                <h3 class="f3 tc">Create a Personal Assistant</h3>
                <p class="tc">
                  Create a Personal Assistant to book your flights and hotels or to do anything you need in seconds. Stop searching online
                  for hours.
                </p>
              </div>
            </div>
            <div class="fl w-100  w-third-ns pa2">
              <div class="outline bg-white pv4">
                <h3 class="f3 tc">Stats & Workflow Automation</h3>
                <p class="tc">Create automated interactions within your apps you use daily. Free yourself from the day-to-day and repetitive
                  tasks.
                </p>
              </div>
            </div>
          </div>


          <div class="cf ph2-ns">
            <div class="fl w-100 w-third-ns pa2">
              <div class="outline bg-white pv4">
                <h3 class="f3 tc">Built a Messenger Bot</h3>
                <p class="tc">A messenger bot can reach your clients and followers where they are. Get on any platform as Whatsapp, Telegram,
                  etc.
                </p>
              </div>
            </div>
            <div class="fl w-100 w-third-ns pa2">
              <div class="outline bg-white pv4">
                <h3 class="f3 tc">Create a Personal Assistant</h3>
                <p class="tc">
                  Create a Personal Assistant to book your flights and hotels or to do anything you need in seconds. Stop searching online
                  for hours.
                </p>
              </div>
            </div>
            <div class="fl w-100  w-third-ns pa2">
              <div class="outline bg-white pv4">
                <h3 class="f3 tc">Stats & Workflow Automation</h3>
                <p class="tc">Create automated interactions within your apps you use daily. Free yourself from the day-to-day and repetitive
                  tasks.
                </p>
              </div>
            </div>
          </div>
        </section>

        <section class="mt6 w-100 center tc pa3 ph5-ns">
          <div class="">
            <h1 class="mw8 center f3 tc">Create custom automated workflows and bot for any patform</h1>
            <p class="mw7 center f5 tc lh-copy">
              We are ready for a challenge. Start your project now.
            </p>
          </div>
        </section>

        <section></section>

    </body>
</html>
