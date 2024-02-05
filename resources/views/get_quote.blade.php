@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('assets/css/get-quote.css') }}">

@section('content')

<section class="form-pages quote">
    <div class="container">
          <div class="form-container">

              <div class="quote-info">
                  <h5>Get A Free Quote Today!</h5>
                  <p>Fill up the form and our team will get back to you within 24 hours.</p>
                  <h6>Our Vision To Give You The Best</h6>
                  <ul>
                      <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56"><defs><style>.abulb{fill:#fdc10d;opacity:0.26;}.bbulb{fill:#fff;}</style></defs><g transform="translate(-162 -579)"><circle class="abulb" cx="28" cy="28" r="28" transform="translate(162 579)"></circle><g transform="translate(0.902 -34.086)"><path class="bbulb" d="M239.679,624.139a1.208,1.208,0,0,1,.739,1.325c-.034.47,0,.945-.009,1.418a.994.994,0,1,1-1.988,0c-.009-.473.025-.947-.009-1.418a1.209,1.209,0,0,1,.739-1.325Z" transform="translate(-50.326 0)"></path><path class="bbulb" d="M188.062,680.876h-4.655c.115-.4-.175-.536-.423-.721a10.381,10.381,0,0,1-.539-16.348,9.76,9.76,0,0,1,7.245-2.391,10.119,10.119,0,0,1,8.5,5.368A10.285,10.285,0,0,1,197,678.454a18.636,18.636,0,0,1-1.94,1.783c-.2.171-.363.309-.29.621H190.1c-.006-.078-.016-.152-.016-.227,0-1.554,0-3.107-.006-4.661,0-.206.083-.28.253-.355a3.171,3.171,0,0,0,1.99-2.876,1,1,0,0,0-.94-1.1.986.986,0,0,0-1.04.968,1.25,1.25,0,0,1-2.5.049,1,1,0,1,0-1.984.169,3.183,3.183,0,0,0,1.97,2.789c.14.064.269.1.268.311-.011,1.609-.006,3.218-.008,4.827A.806.806,0,0,1,188.062,680.876Z" transform="translate(0 -31.408)"></path><path class="bbulb" d="M220,798.711a5.685,5.685,0,0,1-2.535,5.516,5.4,5.4,0,0,1-6.249,0,5.664,5.664,0,0,1-2.513-5.52Z" transform="translate(-25.255 -147.191)"></path><path class="bbulb" d="M213.169,631.364a.985.985,0,0,1-.736,1,.935.935,0,0,1-1.1-.465,17.409,17.409,0,0,1-.744-1.938.945.945,0,0,1,.588-1.128.932.932,0,0,1,1.207.391c.3.647.519,1.33.769,2A.482.482,0,0,1,213.169,631.364Z" transform="translate(-26.843 -3.891)"></path><path class="bbulb" d="M265.071,629.82a1.908,1.908,0,0,1-.07.306c-.188.517-.377,1.033-.582,1.543a1,1,0,1,1-1.863-.718c.2-.537.39-1.076.614-1.6a.978.978,0,0,1,1.109-.579A1.018,1.018,0,0,1,265.071,629.82Z" transform="translate(-70.617 -3.886)"></path></g></g></svg>
                      One-stop Solution
                      </li>
                      <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56"><defs><style>.ascale{fill:#fdc10d;opacity:0.26;}.bscale{fill:#fff;stroke:rgba(0,0,0,0);}</style></defs><g transform="translate(-543 -688)"><g transform="translate(381 109)"><circle class="ascale" cx="28" cy="28" r="28" transform="translate(162 579)"></circle></g><g transform="translate(154.803 53.752)"><path class="bscale" d="M408.671,649.051a.971.971,0,0,1,.574,1.038c-.027.692-.007,1.386-.007,2.106-.768,0-1.513,0-2.257,0a.783.783,0,0,0-.718.373.767.767,0,0,0,.668,1.172c.755.01,1.511,0,2.287,0v1.535c-.076,0-.159.011-.241.011-.67,0-1.34,0-2.01,0a.774.774,0,1,0,0,1.544c.746,0,1.491,0,2.252,0v1.547c-.754,0-1.5,0-2.244,0a.781.781,0,0,0-.717.374.767.767,0,0,0,.671,1.171c.755.01,1.511,0,2.286,0v1.547H408.9c-.644,0-1.288,0-1.932,0a.774.774,0,1,0,.008,1.544c.745,0,1.491,0,2.251,0v1.547h-.237c-.661,0-1.323,0-1.984,0a.777.777,0,1,0,.01,1.546c.729,0,1.459,0,2.207,0v1.547h-.53c-.558,0-1.116,0-1.675,0a.779.779,0,1,0,.012,1.546c.644,0,1.288,0,1.932,0h.266v1.547h-2.172c-.548,0-.9.3-.906.767a.791.791,0,0,0,.894.779h2.2v3.145h-5.671a1.189,1.189,0,0,1-.567-.567v-25.26a1.178,1.178,0,0,1,.567-.567Z"></path><path class="bscale" d="M452.04,782.269v-6.222h2.32c0,.755-.018,1.5.012,2.245a1.094,1.094,0,0,0,.25.616.661.661,0,0,0,.8.154.747.747,0,0,0,.48-.728c0-.661,0-1.323,0-1.984v-.3h1.547v.713c0,.515,0,1.031,0,1.546a.773.773,0,1,0,1.544.007c.005-.67,0-1.34,0-2.01v-.263h1.535c0,.082.011.165.011.247,0,.67,0,1.34,0,2.01a.774.774,0,1,0,1.544,0c0-.746,0-1.492,0-2.252h1.547v.236c0,.661,0,1.323,0,1.985a.777.777,0,1,0,1.546-.011c0-.729,0-1.459,0-2.206h1.547v.817c0,.49-.005.979,0,1.469a.771.771,0,1,0,1.542.006c.008-.67,0-1.34,0-2.01v-.3c.582,0,1.138-.016,1.694.006.344.014.53.274.678.556v5.1a1.189,1.189,0,0,1-.567.567Z" transform="translate(-41.256 -106.824)"></path><path class="bscale" d="M403.567,649.051a1.178,1.178,0,0,0-.567.567v-.567Z"></path><path class="bscale" d="M403,811.76a1.189,1.189,0,0,0,.567.567H403Z" transform="translate(0 -136.882)"></path><path class="bscale" d="M565.71,812.327a1.189,1.189,0,0,0,.567-.567v.567Z" transform="translate(-136.882 -136.882)"></path><path class="bscale" d="M471.042,686.751l7.579-7.578,3.221,3.221-7.58,7.578Z" transform="translate(-57.241 -25.341)"></path><path class="bscale" d="M526.132,661.876c.538-.545,1.086-1.123,1.662-1.674a.707.707,0,0,1,.986.031q1.133,1.106,2.24,2.239a.716.716,0,0,1,.024,1.007c-.546.568-1.118,1.112-1.662,1.647Z" transform="translate(-103.587 -9.225)"></path><path class="bscale" d="M454.093,735.043l2.945,2.95c-.041.025-.1.063-.156.093-1.189.594-2.376,1.194-3.572,1.774a1.09,1.09,0,0,1-.612.112.756.756,0,0,1-.5-1.146c.517-1.046,1.042-2.088,1.564-3.131C453.873,735.475,453.985,735.255,454.093,735.043Z" transform="translate(-41.302 -72.342)"></path></g></g></svg>
                      Superior Designs
                      </li>
                      <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56"><defs><style>.abatch{fill:#fdc10d;opacity:0.26;}.bbatch{fill:#fff;stroke:rgba(0,0,0,0);}</style></defs><g transform="translate(-166 -774)"><g transform="translate(4 195)"><circle class="abatch" cx="28" cy="28" r="28" transform="translate(162 579)"></circle></g><g transform="translate(-458.434 153.159)"><path class="bbatch" d="M665.136,632.528h1.784c.657.106,1.32.183,1.97.322a13.121,13.121,0,1,1-7.105,25.219,12.6,12.6,0,0,1-8.792-10.9,12.441,12.441,0,0,1,2.866-9.8,12.8,12.8,0,0,1,7.711-4.6C664.089,632.671,664.615,632.608,665.136,632.528Zm-1.465,18.657,9.094-9.094-1.343-1.342-7.788,7.789-3.051-3.057-1.307,1.309Z" transform="translate(-13.591)"></path><path class="bbatch" d="M636.315,761.273l3.976-5.8a15.306,15.306,0,0,0,6.725,5.153l-3.722,5.429-1.1-5.876Z" transform="translate(0 -100.901)"></path><path class="bbatch" d="M761.284,760.174l-1.1,5.877-3.721-5.426a15.29,15.29,0,0,0,6.723-5.156l3.974,5.8Z" transform="translate(-98.607 -100.897)"></path></g></g></svg>
                      Quality
                      </li>
                      <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56"><defs><style>.ahjk{fill:#fdc10d;opacity:0.26;}.bhjk{fill:#fff;stroke:rgba(0,0,0,0);}</style></defs><g transform="translate(-543 -774)"><g transform="translate(381 195)"><circle class="ahjk" cx="28" cy="28" r="28" transform="translate(162 579)"></circle></g><g transform="translate(415.303 -93.467)"><path class="bhjk" d="M194.115,880.613c.58.1,1.166.163,1.739.292a11.068,11.068,0,0,1,6.191,3.784,11.3,11.3,0,1,1-10.21-3.961c.257-.036.514-.076.77-.115Zm8.821,11.329a9.575,9.575,0,1,0-9.594,9.563A9.609,9.609,0,0,0,202.936,891.942Z" transform="translate(-34.12)"></path><path class="bhjk" d="M140.843,1008.091a4.172,4.172,0,0,1,1.444-2.34c1.009-.973,1.987-1.978,2.947-2.938l4.317,4.314c-.319.316-.682.674-1.044,1.035-.814.813-1.617,1.638-2.443,2.438a3.043,3.043,0,0,1-5.072-1.2c-.059-.182-.1-.37-.15-.555Z" transform="translate(0 -101.187)"></path><path class="bhjk" d="M178.524,992.106l-4.243-4.245,1.532-1.534a13.314,13.314,0,0,0,4.242,4.247Z" transform="translate(-27.688 -87.537)"></path><path class="bhjk" d="M217.945,908.745a7.834,7.834,0,1,1-7.785-7.874A7.859,7.859,0,0,1,217.945,908.745Z" transform="translate(-50.871 -16.774)"></path></g></g></svg>
                      Transparency
                      </li>
                      <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56"><defs><style>.apil{fill:#fdc10d;opacity:0.26;}.bpil{fill:#fff;stroke:rgba(0,0,0,0);}</style></defs><g transform="translate(-166 -860)"><g transform="translate(4 281)"><circle class="apil" cx="28" cy="28" r="28" transform="translate(162 579)"></circle></g><g transform="translate(-506.506 -18.881)"><path class="bpil" d="M683.005,905.139v-.547a1.309,1.309,0,0,1,1.377-.762c1.913.028,3.826.011,5.74.009a1.051,1.051,0,0,0,1.068-.69.929.929,0,0,0-.98-1.289c-1.674-.008-3.348,0-5.023,0a1.033,1.033,0,1,1,.008-2.05c.359,0,.719,0,1.092,0,0-.722,0-1.393,0-2.064a1.061,1.061,0,0,1,1.207-1.217h18.414c0,2.021,0,3.99,0,5.96a1.062,1.062,0,0,0,1.207,1.218h7.448a3.3,3.3,0,0,1,3.4,2.616c.005.019.029.033.043.05v6.973a1.263,1.263,0,0,1-1.378.758c-.472-.033-.948-.006-1.408-.006-.766,2.075-2,3.1-3.755,3.142a3.9,3.9,0,0,1-2.265-.636,3.963,3.963,0,0,1-1.717-2.486H697.1c-.746,2.036-1.977,3.067-3.714,3.121a3.9,3.9,0,0,1-2.27-.617,3.979,3.979,0,0,1-1.75-2.524c-.689,0-1.36.006-2.031,0a1.023,1.023,0,0,1-1.032-.866,2.373,2.373,0,0,1-.013-.375c0-.942,0-1.885,0-2.859-.657,0-1.282-.028-1.9.008a1.274,1.274,0,0,1-1.378-.76v-.547a1.314,1.314,0,0,1,1.377-.762c2.915.022,5.831.007,8.746.012a1.057,1.057,0,0,0,1.06-.6,1.024,1.024,0,0,0-1.026-1.453c-2.927,0-5.854-.013-8.781.009A1.316,1.316,0,0,1,683.005,905.139Zm10.241,6.29a1.879,1.879,0,1,0,1.859,1.882A1.887,1.887,0,0,0,693.246,911.429Zm16.217,1.879a1.88,1.88,0,1,0,1.9-1.879A1.887,1.887,0,0,0,709.463,913.308Z"></path><path class="bpil" d="M858.408,902.989h-5.6v-4.875C855.619,898.649,857.123,900.666,858.408,902.989Z" transform="translate(-144.833 -1.356)"></path></g></g></svg>
                      On-time Delivery
                      </li>
                      <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56"><defs><style>.aqwe{fill:#fdc10d;opacity:0.26;}.bqwe{fill:#233137;}.cqwe{fill:#fff;}.dqwe{fill:#1a232c;}</style></defs><g transform="translate(-543 -860)"><g transform="translate(381 281)"><circle class="aqwe" cx="28" cy="28" r="28" transform="translate(162 579)"></circle></g><g transform="translate(149.129 -1.31)"><path class="bqwe" d="M422.427,870.056c.089.146.248.074.371.108a3.914,3.914,0,0,1,1.716.963,2.663,2.663,0,0,0,2.833.669,3.764,3.764,0,0,1,4.809,2.325,2.7,2.7,0,0,0,2.259,1.79,3.786,3.786,0,0,1,3.313,4.261A2.609,2.609,0,0,0,439,882.684a3.715,3.715,0,0,1,1.706,3.678,3.493,3.493,0,0,1-.515,1.475,2.684,2.684,0,0,0-.006,2.943,3.758,3.758,0,0,1-1.18,5.153,2.705,2.705,0,0,0-1.263,2.7,3.773,3.773,0,0,1-3.208,4.064,2.782,2.782,0,0,0-2.416,1.9,3.732,3.732,0,0,1-4.653,2.252,2.775,2.775,0,0,0-3,.687,3.471,3.471,0,0,1-1.916.959c-.05.008-.1.012-.117.069h-1.279c-.027-.112-.134-.107-.21-.125a3.687,3.687,0,0,1-1.716-.959,2.681,2.681,0,0,0-2.838-.654,3.761,3.761,0,0,1-4.786-2.312,2.7,2.7,0,0,0-2.322-1.814,3.744,3.744,0,0,1-3.259-4.015,2.846,2.846,0,0,0-1.345-2.812,3.72,3.72,0,0,1-1.148-5.012,2.841,2.841,0,0,0-.005-3.113,3.77,3.77,0,0,1,1.122-5,.673.673,0,0,1,.945.022c.18.439.158.664-.186.883a2.708,2.708,0,0,0-.748,3.743,3.609,3.609,0,0,1,.016,3.823,4.1,4.1,0,0,0-.359.742A2.628,2.628,0,0,0,405.458,895a3.7,3.7,0,0,1,1.734,3.56,2.617,2.617,0,0,0,2.267,2.981,3.913,3.913,0,0,1,3.284,2.661,2.548,2.548,0,0,0,3.195,1.525,3.94,3.94,0,0,1,4.157.947,2.544,2.544,0,0,0,3.57-.006,3.864,3.864,0,0,1,4.12-.943,2.386,2.386,0,0,0,1.185.1,2.644,2.644,0,0,0,2.1-1.773,3.732,3.732,0,0,1,3.12-2.488,2.605,2.605,0,0,0,2.361-2.91,3.892,3.892,0,0,1,1.841-3.735,2.561,2.561,0,0,0,.785-3.513,3.879,3.879,0,0,1,0-4.194,2.559,2.559,0,0,0-.8-3.51,3.89,3.89,0,0,1-1.832-3.739,2.614,2.614,0,0,0-2.408-2.908,3.563,3.563,0,0,1-3.024-2.389,2.77,2.77,0,0,0-3.568-1.713,3.552,3.552,0,0,1-3.725-.855,2.636,2.636,0,0,0-3.886-.017,3.737,3.737,0,0,1-3.831.86,2.628,2.628,0,0,0-3.448,1.666,3.72,3.72,0,0,1-3.1,2.455,2.638,2.638,0,0,0-1.975,1.22.678.678,0,0,1-.8.333c-.416-.34-.459-.579-.159-1.026a3.646,3.646,0,0,1,2.647-1.665,2.7,2.7,0,0,0,2.326-1.809,3.76,3.76,0,0,1,4.783-2.318,2.677,2.677,0,0,0,2.84-.649,3.861,3.861,0,0,1,1.786-.986c.073-.018.187.018.218-.1Z"></path><path class="cqwe" d="M411.127,882.913a.678.678,0,0,0,.8-.333,2.638,2.638,0,0,1,1.975-1.22,3.72,3.72,0,0,0,3.1-2.455,2.628,2.628,0,0,1,3.448-1.666,3.737,3.737,0,0,0,3.831-.86,2.636,2.636,0,0,1,3.886.017,3.552,3.552,0,0,0,3.725.855,2.77,2.77,0,0,1,3.569,1.713,3.563,3.563,0,0,0,3.024,2.389,2.614,2.614,0,0,1,2.408,2.908A3.89,3.89,0,0,0,442.73,888a2.559,2.559,0,0,1,.8,3.51,3.879,3.879,0,0,0,0,4.194,2.561,2.561,0,0,1-.785,3.513,3.892,3.892,0,0,0-1.841,3.735,2.605,2.605,0,0,1-2.361,2.91,3.732,3.732,0,0,0-3.12,2.488,2.644,2.644,0,0,1-2.1,1.773,2.385,2.385,0,0,1-1.185-.1,3.864,3.864,0,0,0-4.12.943,2.544,2.544,0,0,1-3.57.006,3.94,3.94,0,0,0-4.157-.947,2.548,2.548,0,0,1-3.195-1.525,3.913,3.913,0,0,0-3.284-2.661,2.617,2.617,0,0,1-2.267-2.981,3.7,3.7,0,0,0-1.734-3.56,2.628,2.628,0,0,1-1.149-3.034,4.1,4.1,0,0,1,.359-.742A3.609,3.609,0,0,0,409,891.7a2.708,2.708,0,0,1,.748-3.743c.344-.219.366-.445.186-.883a2.41,2.41,0,0,0,.606-.76c.565.066.751-.055.889-.591a3.832,3.832,0,0,0,.129-1.295.657.657,0,0,0-.612-.681A2.31,2.31,0,0,1,411.127,882.913Zm27.448,4.609c.347-.325.382-.51.159-.913a13.72,13.72,0,0,0-1.265-1.891c-.333-.419-.483-.461-.995-.273a7.441,7.441,0,0,0-1.189-1.151c.179-.605.156-.691-.357-1.071a14.029,14.029,0,0,0-11.894-2.586,14.345,14.345,0,1,0,16.978,10.044c-.128-.439-.291-.556-.762-.544Z" transform="translate(-4.344 -4.303)"></path><path class="bqwe" d="M417.128,913.86a.657.657,0,0,1,.612.681,3.832,3.832,0,0,1-.129,1.295c-.139.536-.324.657-.889.591a.679.679,0,0,1-.268-.846,2.628,2.628,0,0,0,.105-.957C416.541,914.133,416.65,913.994,417.128,913.86Z" transform="translate(-10.529 -34.415)"></path><path class="bqwe" d="M451.456,902.788c.471-.012.634.1.762.544a14.347,14.347,0,1,1-16.978-10.044,14.029,14.029,0,0,1,11.894,2.586c.513.38.535.466.357,1.071a.792.792,0,0,1-1.048-.109,11.439,11.439,0,0,0-1.557-1.039,5.43,5.43,0,0,0-1.847-.795c-.124-.054-.246-.111-.372-.16a11.833,11.833,0,0,0-6.382-.562,13.142,13.142,0,0,0-2.69,25.187,13.147,13.147,0,0,0,6.988.746,11.18,11.18,0,0,0,2.517-.708,1.41,1.41,0,0,0,.214-.05,12.9,12.9,0,0,0,5.438-4.052,13.057,13.057,0,0,0,2.846-8.037,12.682,12.682,0,0,0-.507-3.689C450.955,903.2,451.027,903.059,451.456,902.788Z" transform="translate(-16.549 -17.954)"></path><path class="bqwe" d="M540.367,919.8a.582.582,0,0,1-.807-.251,19.629,19.629,0,0,0-1.346-1.983.689.689,0,0,1,.052-.843c.512-.188.662-.147.995.273a13.723,13.723,0,0,1,1.265,1.891C540.749,919.287,540.713,919.472,540.367,919.8Z" transform="translate(-106.135 -36.578)"></path><path class="cqwe" d="M483.163,930.519h-.824c-.109-.459-.262-.589-.72-.591-.652,0-1.3-.022-1.955.007-.35.016-.46-.062-.458-.439q.026-4.962,0-9.925a1.907,1.907,0,0,1,.365-1.172,6.815,6.815,0,0,0,1.54-3.527,1.163,1.163,0,0,1,1.067-.96,1.143,1.143,0,0,1,1.175.808,2.549,2.549,0,0,1,.032,1.079,10.437,10.437,0,0,1-.782,2.575.632.632,0,0,0,.637.937c.877.01,1.754,0,2.631,0s1.78-.006,2.669,0a.874.874,0,0,1,.108,1.745c-.037.006-.075,0-.112.011a.593.593,0,0,0,.061,1.183c.113.007.226,0,.338.009a.889.889,0,0,1,.8.888.868.868,0,0,1-.79.855c-.1.012-.2.01-.3.017-.426.03-.648.221-.661.569s.183.546.611.611a.89.89,0,0,1-.083,1.777c-.225.01-.451,0-.677,0a2.269,2.269,0,0,0-.263.007.579.579,0,0,0-.092,1.135,2.454,2.454,0,0,0,.258.048.882.882,0,0,1,.783.938.9.9,0,0,1-.922.813c-1.24.01-2.481,0-3.722,0C483.426,929.932,483.273,930.06,483.163,930.519Z" transform="translate(-59.873 -34.453)"></path><path class="dqwe" d="M458.9,926.131c.11-.459.263-.588.722-.589,1.241,0,2.481,0,3.722,0a.9.9,0,0,0,.922-.813.882.882,0,0,0-.783-.938,2.454,2.454,0,0,1-.258-.048.579.579,0,0,1,.092-1.135,2.269,2.269,0,0,1,.263-.007c.225,0,.451.008.677,0a.89.89,0,0,0,.083-1.777c-.428-.065-.624-.262-.611-.611s.235-.539.661-.569c.1-.007.2,0,.3-.017a.868.868,0,0,0,.79-.855.889.889,0,0,0-.8-.888c-.112-.012-.225,0-.338-.009a.593.593,0,0,1-.061-1.183c.037-.007.075-.005.112-.011a.874.874,0,0,0-.108-1.745c-.889-.009-1.779,0-2.669,0s-1.754.007-2.631,0a.632.632,0,0,1-.637-.937,10.437,10.437,0,0,0,.782-2.575,2.549,2.549,0,0,0-.032-1.079,1.143,1.143,0,0,0-1.175-.808,1.163,1.163,0,0,0-1.067.96,6.815,6.815,0,0,1-1.54,3.527,1.907,1.907,0,0,0-.365,1.172q.023,4.962,0,9.925c0,.377.107.455.458.439.65-.029,1.3-.01,1.955-.007.458,0,.611.132.72.591-.107.444-.276.6-.722.6q-4.173.008-8.347,0c-.478,0-.68-.223-.68-.7q0-5.809,0-11.619c0-.47.211-.675.7-.676,1.567,0,3.133-.007,4.7,0a.585.585,0,0,0,.553-.284,14.091,14.091,0,0,0,1.062-1.768,3.291,3.291,0,0,0,.308-1.148,2.341,2.341,0,0,1,1.51-2.031,2.264,2.264,0,0,1,2.472.478,5.065,5.065,0,0,1,.435.465.625.625,0,0,0,.032.182,3.213,3.213,0,0,1,.216,1.961,7.827,7.827,0,0,1-.475,1.83c-.063.165-.131.33.162.3,1.336,0,2.672.023,4.006,0a2.315,2.315,0,0,1,1.93.793,2.663,2.663,0,0,0,.216.2,2.545,2.545,0,0,1-.058,2.178c-.178.139-.177.264-.006.424a5.968,5.968,0,0,1,.5.563,1.445,1.445,0,0,1-.062,1.826,2.207,2.207,0,0,1-.339.351c-.262.2-.266.384-.024.591a2.461,2.461,0,0,1,.026,1.917.6.6,0,0,0-.028.183,3.341,3.341,0,0,1-.765.712c-.088.063-.164.108-.071.232a1.413,1.413,0,0,1,.167,1.62,2.592,2.592,0,0,1-1.593,1.337,2.3,2.3,0,0,1-.517.077q-1.859.01-3.718,0C459.185,926.735,459.011,926.586,458.9,926.131Zm-9.415-5.889c0,1.653.005,3.307-.006,4.96,0,.252.048.345.324.341,1.215-.018,2.43-.018,3.645-.008.248,0,.311-.068.311-.313q-.012-5,0-10c0-.227-.053-.3-.29-.3-1.215.009-2.43.01-3.644-.011-.3-.005-.347.092-.345.361C449.495,916.935,449.489,918.589,449.489,920.242Z" transform="translate(-35.613 -30.066)"></path><path class="cqwe" d="M453.718,944.423c0-1.653.006-3.307-.006-4.96,0-.27.05-.367.345-.361,1.214.021,2.43.02,3.644.011.237,0,.29.069.29.3q-.011,5,0,10c0,.245-.063.315-.311.313-1.215-.01-2.43-.01-3.645.008-.276,0-.326-.089-.324-.341C453.723,947.729,453.718,946.076,453.718,944.423Zm1.729,4.941a1.531,1.531,0,1,0-1.527-1.52A1.534,1.534,0,0,0,455.447,949.363Z" transform="translate(-39.842 -54.246)"></path><path class="dqwe" d="M456.211,975.754a1.531,1.531,0,1,1,.019-3.062,1.531,1.531,0,1,1-.019,3.062Zm.093-1.212a.285.285,0,0,0,.255-.31.32.32,0,0,0-.341-.355.311.311,0,0,0-.33.36C455.9,974.443,456.008,974.554,456.3,974.543Z" transform="translate(-40.606 -80.637)"></path><path class="cqwe" d="M460.709,978.889c-.3.011-.4-.1-.416-.3a.311.311,0,0,1,.33-.36.32.32,0,0,1,.341.355A.285.285,0,0,1,460.709,978.889Z" transform="translate(-45.011 -84.983)"></path></g></g></svg>
                      Homes With Warranty
                      </li>
                  </ul>
                  <span class="note">
                  <img src="assets/images/happiness.png" alt="">
                  <span> You have made the right choice by choosing us.</span>
                  </span>
              </div>
              <div class="contact-form" id="form-top">
                  <form class="contact-page" action="includes/contact_us_mail.php?mail_type=hubspot" method="post" id="">
                      <input type="hidden" name="token" value="xYk6PuTDmk5bF2Qi3BunPrHh8lr_tEF7OGXfq5Hea3c,">
                      <ul>
                          <li class="name text-cont-error" id="div-name">
                          <label>First Name*</label>
                          <input type="text" name="txtname" id="txtname" placeholder="Eg: John">
                          <span style="display: none;" id="errorname">This field is required</span>
                          </li>
                          <li class="lname text-cont-error" id="div-lname">
                          <label>Last Name*</label>
                          <input type="text" name="txtlname" id="txtlname" placeholder="Eg: Smith">
                          <span style="display: none;" id="errorlname">This field is required</span>
                          </li>
                          <li class="phone text-cont-error" id="div-phone">
                          <label>Phone Number*</label>
                          <input type="number" name="txtphone" id="txtphone" placeholder="Enter Phone Number" onpaste="return validateNumber(event)" keydown="return validateNumber(event)">
                          <span style="display: none;" id="errorphone">Please enter a valid phone number</span>
                          <span id="valid-msg" class="hide" style="display:none;">✓ Valid</span>
                          <span id="error-msg" class="hide" style="display:none;"></span>
                          </li>
                          <li class="email text-cont-error" id="div-email">
                          <label>Email*</label>
                          <input type="text" name="txtemail" id="txtemail" placeholder=" jane.doe@example.com ">
                          <span style="display: none;" id="erroremail">Please enter a valid email address</span>
                          </li>
                          <li id="interested_in">
                              <label for="">I am Interested In *</label>
                              <ul>
                                  <li>
                                      <input type="checkbox" id="checkbox5" name="interested_in" value="Architectural Design" class="check-button">
                                      <label for="checkbox5" role="button">Architectural Design</label>
                                  </li>
                                  <li>
                                      <input type="checkbox" id="checkbox6" value="Interior Designing" name="interested_in" class="check-button">
                                      <label for="checkbox6" role="button">Interior Designing</label>
                                  </li>
                                  <li>
                                      <input type="checkbox" id="checkbox7" value="House Construction" name="interested_in" class="check-button">
                                      <label for="checkbox7" role="button">House Construction</label>
                                  </li>
                                  <li>
                                      <input type="checkbox" id="checkbox8" value="House Renovation" name="interested_in" class="check-button">
                                      <label for="checkbox8" role="button">House Renovation</label>
                                  </li>
                                  <li id="other-service">
                                      <input type="checkbox" id="checkbox9" value="Others" name="interested_in" class="check-button">
                                      <label for="checkbox9" role="button">Others (specify below)</label>
                                  </li>
                              </ul>
                              <span style="display: none;" id="errorinterested_in">This field is required</span>
                          </li>
                          <li class="contact-message msg-cont-error" id="div-message">
                          <label>Message*</label>
                          <textarea name="message" rows="3" id="message" placeholder="Your Message..."></textarea>
                          <span style="display: none;" id="errormessage">Please enter your requirements</span>
                          </li>
                          <li class="policy">
                          <p>By clicking the submit button, you agree with CHENNEE to store &amp; progress the information for contact purposes.</p>
                          </li>
                          {{-- <li class="captchas">
                          <div id="recaptcha-rel"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-8z4l9urnt2nk" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcruOUbAAAAAOjGGnAx5VjfVzsxD9jpavy9dHn7&amp;co=aHR0cHM6Ly93d3cuY2hlbm5lZS5pbjo0NDM.&amp;hl=en&amp;v=MHBiAvbtvk5Wb2eTZHoP1dUd&amp;size=normal&amp;cb=afvvi0y11swe"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                          </li> --}}
                          <li id="button-submit">
                          <!-- onclick="formSubmit()" -->
                          <button onclick="formSubmit(event)" type="button" id="submit-button" class="form-submission contact-submit button">Submit</button>
                          <span id="ajx-loader"><img src="assets/images/ajax_loader.gif" alt="loader"></span>
                          </li>
                      </ul>
                  </form>
              </div>
          </div>
    </div>
</section>

<section class="discovery-popup">
         <div class="discovery-form">
            <div class="discovery-header">
               <h3 id="popup-title">Thank You <span></span>!!</h3>
               <p>Just spend 20 more seconds with us to get the perfect tailor-made solution. </p>
            </div>
            <div class="discovery-content">
               <form action="includes/discover_mail_us.php?mail_type=discover_us" method="post" id="discovery-top" >
                  <ul>
                  <li id="site_areas">
                        <p>1. Where is your site location?</p>
                        <div class="checkbox-set">
                           <label class="radio">
                           <input id="application-type-yek" type="radio" onfocus="removemessage('site_areas')" name="site_areas" value="1000" >
                           <span class="outer">
                           <span class="inner"></span>
                           </span>Hosur
                           </label>
                           <label class="radio">
                           <input id="application-type-dho" type="radio" onfocus="removemessage('site_areas')"  name="site_areas" value="2000" >
                           <span class="outer">
                           <span class="inner"></span>
                           </span>Bangalore
                           </label>
                           <label class="radio">
                           <input id="application-type-cha" type="radio" onfocus="removemessage('site_areas')"  name="site_areas" value="3000" >
                           <span class="outer">
                           <span class="inner"></span>
                           </span>Chennai
                           </label>
                           <label class="radio">
                           <input id="application-type-theen" type="radio" onfocus="removemessage('site_areas')"   name="site_areas" value="4000" >
                           <span class="outer">
                           <span class="inner"></span>
                           </span>Other Location
                           </label>
                        </div>
                        <p class="discover-error">Please select your site area</p>
                     </li>
                     <li id="site_area">
                        <p>2. What is the your site area?</p>
                        <div class="checkbox-set">
                           <label class="radio">
                           <input id="application-type-one" type="radio" onfocus="removemessage('site_area')" name="site_area" value="1000" >
                           <span class="outer">
                           <span class="inner"></span>
                           </span>Lesser Than 1000 sqft
                           </label>
                           <label class="radio">
                           <input id="application-type-two" type="radio" onfocus="removemessage('site_area')"  name="site_area" value="2000" >
                           <span class="outer">
                           <span class="inner"></span>
                           </span>Lesser Than 2000 sqft
                           </label>
                           <label class="radio">
                           <input id="application-type-three" type="radio" onfocus="removemessage('site_area')"   name="site_area" value="3000" >
                           <span class="outer">
                           <span class="inner"></span>
                           </span>Lesser Than 3000 sqft
                           </label>
                           <label class="radio">
                           <input id="application-type-three" type="radio" onfocus="removemessage('site_area')"   name="site_area" value="4000" >
                           <span class="outer">
                           <span class="inner"></span>
                           </span>Greater Than 4000 sqft
                           </label>
                        </div>
                        <p class="discover-error">Please select your site area</p>
                     </li>
                     <li id="building_type">
                        <p>3. What type of residential building would you like to construct?</p>
                        <div class="checkbox-set">
                           <label class="radio">
                           <input id="live-stream-four" type="radio" onfocus="removemessage('building_type')" name="building_type" value="Simplex">
                           <span class="outer">
                           <span class="inner"></span>
                           </span>Simplex
                           </label>
                           <label class="radio">
                           <input id="live-stream-two" type="radio" onfocus="removemessage('building_type')" name="building_type" value="Duplex">
                           <span class="outer">
                           <span class="inner"></span>
                           </span>Duplex
                           </label>
                           <label class="radio">
                           <input id="live-stream-one" type="radio" onfocus="removemessage('building_type')" name="building_type" value="Rental">
                           <span class="outer">
                           <span class="inner"></span>
                           </span>Rental House
                           </label>
                           <label class="radio">
                           <input id="live-stream-three" type="radio" onfocus="removemessage('building_type')" name="building_type" value="Apartment">
                           <span class="outer">
                           <span class="inner"></span>
                           </span>Apartment
                           </label>
                        </div>
                        <p class="discover-error">Please select your building type</p>
                     </li>
                     <li id="bedrooms">
                        <p>4. How many bedrooms required?</p>
                        <div class="checkbox-set">
                           <label class="radio">
                           <input id="apply-type-one" type="radio" onfocus="removemessage('bedrooms')" name="bedrooms" value="1BHK">
                           <span class="outer">
                           <span class="inner"></span>
                           </span>1 BHK
                           </label>
                           <label class="radio">
                           <input id="apply-type-two" type="radio" onfocus="removemessage('bedrooms')" name="bedrooms" value="2BHK">
                           <span class="outer">
                           <span class="inner"></span>
                           </span>2 BHK
                           </label>
                           <label class="radio">
                           <input id="apply-type-three" type="radio" onfocus="removemessage('bedrooms')" name="bedrooms" value="3BHK">
                           <span class="outer">
                           <span class="inner"></span>
                           </span>3 BHK
                           </label>
                           <label class="radio">
                           <input id="apply-type-four" type="radio" onfocus="removemessage('bedrooms')" name="bedrooms" value="4BHK">
                           <span class="outer">
                           <span class="inner"></span>
                           </span>More than 4 BHK
                           </label>
                        </div>
                        <p class="discover-error">Please select your bedrooms</p>
                     </li>
                     <li id="material">
                        <p>5. What is the required material?</p>
                        <div class="checkbox-set">
                           <label class="radio">
                           <input id="development-one" type="radio" onfocus="removemessage('material')" name="material" value="Red" >
                           <span class="outer">
                           <span class="inner"></span>
                           </span>Red Brick
                           </label>
                           <label class="radio">
                           <input id="development-two" type="radio" onfocus="removemessage('material')" name="material" value="Solid">
                           <span class="outer">
                           <span class="inner"></span>
                           </span>Solid Block
                           </label>
                           <label class="radio">
                           <input id="development-one" type="radio" onfocus="removemessage('material')" name="material" value="AAC" >
                           <span class="outer">
                           <span class="inner"></span>
                           </span>AAC Block
                           </label>
                        </div>
                        <p class="discover-error">Please select your material</p>
                     </li>
                     <li id="execution_time">
                        <p>6. When you are planning for execution?</p>
                        <div class="checkbox-set">
                           <label class="radio">
                           <input id="techType-one" type="radio" onfocus="removemessage('execution_time')" name="execution_time" value="Immediate">
                           <span class="outer">
                           <span class="inner"></span>
                           </span>Immediate
                           </label>
                           <label class="radio">
                           <input id="techType-two" type="radio" onfocus="removemessage('execution_time')" name="execution_time" value="1WEEk">
                           <span class="outer">
                           <span class="inner"></span>
                           </span>After One Week
                           </label>

                           <label class="radio">
                           <input id="techType-two" type="radio" onfocus="removemessage('execution_time')" name="execution_time" value="1month">
                           <span class="outer">
                           <span class="inner"></span>
                           </span>After One Month
                           </label>

                           <label class="radio">
                           <input id="techType-two" type="radio" onfocus="removemessage('execution_time')" name="execution_time" value="6month">
                           <span class="outer">
                           <span class="inner"></span>
                           </span>Within 6 Months
                           </label>
                        </div>
                        <p class="discover-error">Please select your execution time</p>
                     </li>
                     <li id="call_time">
                        <p>7. What time we can call you back?</p>
                        <div class="checkbox-set">
                           <label class="radio">
                           <input id="techieType-one" type="radio" onfocus="removemessage('call_time')" name="call_time" value="Immediately">
                           <span class="outer">
                           <span class="inner"></span>
                           </span>Immediately
                           </label>
                           <label class="radio">
                           <input id="techieType-two" type="radio" onfocus="removemessage('call_time')" name="call_time" value="Anytime">
                           <span class="outer">
                           <span class="inner"></span>
                           </span>Anytime Today
                           </label>

                           <label class="radio">
                           <input id="techieType-two" type="radio" onfocus="removemessage('call_time')" name="call_time" value="9amto2pm">
                           <span class="outer">
                           <span class="inner"></span>
                           </span>Tomorrow, 9:00 AM to 2:00 PM
                           </label>

                           <label class="radio">
                           <input id="techieType-two" type="radio" onfocus="removemessage('call_time')" name="call_time" value="3pmto8pm">
                           <span class="outer">
                           <span class="inner"></span>
                           </span>Tomorrow, 3:00 PM to 8:00 PM
                           </label>
                        </div>
                        <p class="discover-error">Please select your execution time</p>
                     </li>
                     <li class="policies">
                        <p>The information collected by CHENNEE is solely for the purpose to understand and serve you a better service. CHENNEE is committed to the protection of your Personal Data, including Communicating data for internal Business purposes only. For more information, Please read our Privacy Policy.</p>
                     </li>
                     <li id="discover-load">
                        <input type="hidden" name="txtname" id="txtname-discover">
                        <input type="hidden" name="txtlname" id="txtlname-discover">
                        <input type="hidden" name="txtphone" id="txtphone-discover">
                        <input type="hidden" name="txtemail" id="txtemail-discover">
                        <input type="hidden" name="country" id="country-discover" >
                        <input type="hidden" name="geocountry" id="geocountry-discover" >
                        <input type="hidden" name="txtcompany" id="txtcompany-discover">
                        <input type="hidden" name="message" id="message-discover">
                        <input type="hidden" name="solution" id="solution-discover">
                        <button type="button"  onclick="discoverFormSubmit()" id="discover-submit-button" class="button">Submit</button>
                        <span id="ajx-loader"><img src="assets/images/ajax_loader.gif" alt="loader"></span>
                     </li>
                  </ul>
                  <input type="hidden" name="txtname" class="popup-name">
                  <input type="hidden" name="txtemail"  class="popup-email">
               </form>
            </div>
            <i onclick="exitForm()">
               <svg xmlns="http://www.w3.org/2000/svg" width="246.2" height="246.2" viewBox="0 0 246.2 246.2">
                  <g id="Group_1" data-name="Group 1" transform="translate(-0.65 0.02)">
                     <path id="Shape_1" data-name="Shape 1" d="M123.1,0A123.1,123.1,0,1,1,0,123.1,123.1,123.1,0,0,1,123.1,0Z" transform="translate(0.65 -0.02)" fill="#fff"/>
                     <path id="Forma_1" data-name="Forma 1" d="M130.031,123.362l36.214-35.711a5.62,5.62,0,0,0,0-8.03,5.812,5.812,0,0,0-8.144,0l-36.214,35.711L85.671,79.621a5.813,5.813,0,0,0-8.144,0,5.62,5.62,0,0,0,0,8.03l36.216,35.711L77.527,159.074a5.62,5.62,0,0,0,0,8.03,5.813,5.813,0,0,0,8.144,0l36.216-35.711L158.1,167.1a5.813,5.813,0,0,0,8.144,0,5.62,5.62,0,0,0,0-8.03Z" fill="#1A232C"/>
                  </g>
               </svg>
            </i>
         </div>
      </section>
	  <script>
	  // $(".discovery-popup").css({"opacity": "1", "visibility": "visible"});
	   function exitForm(){
		   discoverFormSubmit();
	   }
		  /*$('#txtname, #txtlname, #txtphone, #txtemail, #interested_in, #message').mouseleave (function(){
				if($(this).val() == ''){
					$(this).next('span').show();
					$(this).focus();
					return false;
				} else{
					$(this).next('span').hide();
					$(this).removeClass('focus-visible');
				}
			 });*/
	  function formSubmit(){

		  		if($('#txtname').val()=='' && $('#txtlname').val()=='' && $('#txtphone').val()=='' && $('#txtemail').val()=='' && $('#interested_in input[type=checkbox]:checked').length == 0 && $('#message').val()==''){
					$('#errorname, #errorlname, #errorphone, #erroremail, #errorinterested_in, #errormessage').show();
					$('#txtname, #txtlname, #txtphone, #txtemail, #interested_in label,  #message').addClass('focus-visible');
					return false;
				 }else{
					$('#errorname, #errorlname, #errorphone, #erroremail, #errorinterested_in, #errormessage').hide();
					$('#txtname, #txtlname, #txtphone, #txtemail, #interested_in label,  #message').removeClass('focus-visible');
				 }
				 if($('#txtname').val()==''){
					 $('#errorname').show();
					 $('#txtname').focus();
					 return false;
				 }else{
					 $('#errorname').hide();
					 $('#txtname').removeClass('focus-visible');
				 }



				 if($('#txtlname').val()==''){
					 $('#errorlname').show();
					 $('#txtlname').focus();
					 return false;
				 }else{
					 $('#errorlname').hide();
				 }
				 if($('#txtphone').val()==''){
					 $('#errorphone').show();
					 $('#txtphone').focus();
					 return false;
				 }else{
					 $('#errorphone').hide();
				 }

				  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				  var inputText = $('#txtemail').val();
				if(inputText.match(mailformat))
				{
					$('#erroremail').hide();
				}else{
					$('#erroremail').show();
					$('#txtemail').focus();
					return false;
				}
				if($('#interested_in input[type=checkbox]:checked').length == 0)
				{
					$('#errorinterested_in').show();
					$('#interested_in label').addClass('focus-visible');
					 return false;
				}else{
					 $('#errorinterested_in').hide();
					$('#interested_in label').removeClass('focus-visible');
				 }
				if($('#message').val()==''){
					$('#errormessage').show();
					$('#message').focus();
					 return false;
				 }else{
					 $('#errormessage').hide();
				 }
		  		$('#popup-title span').html($('#txtname').val());
		  		$('#ajx-loader').show();
		  		$('.discovery-popup')
				  .delay(2000)
				  .queue(function (next) {
					$(this).css({"opacity": "1", "visibility": "visible"});
					next();
					$('#ajx-loader').hide();
				 });
				 //$(".discovery-popup").delay(10000).css({"opacity": "1", "visibility": "visible"});
				setTimeout(discoverFormSubmit, 60000);
			 }

			 function discoverFormSubmit(){
				 $.ajax({
                       url: "{{ route('quote.save') }}",
                       type: "POST",
                       data: {
                           firstName: $("#txtname").val(),
                           lastName: $("#txtlname").val(),
                           phone: $("#txtphone").val(),
                           email: $("#txtemail").val(),
                           service1: $('#interested_in input[id=checkbox5]:checked').val(),
                           service2: $('#interested_in input[id=checkbox6]:checked').val(),
                           service3: $('#interested_in input[id=checkbox7]:checked').val(),
                           service4: $('#interested_in input[id=checkbox8]:checked').val(),
						   service5: $('#interested_in input[id=checkbox9]:checked').val(),
						   message: $("#message").val(),
						   sitearea: $('input[name="site_area"]:checked').val(),
						   location: $('input[name="site_areas"]:checked').val(),
						   building: $('input[name="building_type"]:checked').val(),
						   bedroom: $('input[name="bedrooms"]:checked').val(),
						   brick: $('input[name="material"]:checked').val(),
						   plan: $('input[name="execution_time"]:checked').val(),
                           call: $('input[name="call_time"]:checked').val(),
						   _token: '{{ csrf_token() }}',
						   subt: 'Get Quote',
                       },
                       dataType: "JSON",
                       success: function (jsonStr) {
						   //$(".discovery-popup").css({"opacity": "0", "visibility": "hidden"});

						   //if(jsonStr=='success'){
							   window.location="acknowledgement.php";
						   //}

                       }
                   });
                   $("#discover-submit-button").html("Submitting..");
                   window.setTimeout(function(){
                    $(".discovery-popup").css({"opacity": "0", "visibility": "hidden"});
                    // Move to a new location or you can do something else
                    window.location.href = "{{ route('thank.you') }}";
                    }, 2000);
			 }
function removemessage(dd){
}

      </script>
<style>

.popup__content{background-image:url(assets/images/popup-bg.png);background-repeat:no-repeat;background-size:cover;width:700px;height:auto;display:flex;flex-direction:column;justify-content:center;align-items:center;position:relative;border-radius:17px}.popup__close{background-color:#ddd!important;height:30px;width:30px;line-height:30px;text-align:center;border-radius:50%;position:absolute;right:-10px;top:-10px;display:flex;align-items:center;justify-content:center;cursor:pointer}.popup-cont h5{font-family:sofia_probold;font-size:42px;line-height:55px;color:#ffc30e;margin:0;position:relative;padding-bottom:35px}.popup-cont #off{position:absolute;right:5%;top:35px;display:block;width:200px;height:auto}.popup-cont h5:before{content:"";width:100px;height:2px;background:#fff;display:block;position:absolute;bottom:10px;left:0;right:0;margin:0}.popup-cont p{font-size:22px;line-height:32px;color:#fff;max-width:800px;margin:auto; font-family: sofia_prolight;padding-top:10px}.popup-cont p b{font-family:sofia_probold}.popup-cont a{margin-top:20px}.popup-cont{width:70%;padding:60px 30px 145px 30px}#popup-img{position:absolute!important;width:100%;right:0;bottom:0}#popup-img img{border-bottom-right-radius:17px;border-bottom-left-radius:17px}.popup-cont .nav_quote{font-size:16px;z-index:99}@media screen and (max-width:640px){.popup__content{width:340px;position:relative}.popup-cont{width:80%;padding:80px 15px 70px 16px}.popup-cont #off{right:5%;top:14px;display:block;width:105px!important}.popup-cont h5{font-size:21px;line-height:30px;padding-bottom:20px}.popup-cont p{font-size:13px;line-height:24px}.popup-cont .nav_quote{font-size:12px;min-width:inherit;padding:5px 9px}#popup-img{height:40%;width:100%;bottom:0;right:0}}@media screen and (max-width:340px){.popup__content{width:310px;position:relative}.popup-cont{width:80%;padding:80px 15px 70px 16px}}
@media screen and (min-width:768px){ .floating-cta{display:none}}.whatsapp-footer{transition:all ease .3s;}@media screen and (max-width:768px){footer {padding-bottom: 75px;}.whatsapp-footer.show{bottom:70px;}.floating-cta.show{bottom:0;}.floating-cta{position:fixed;width:100%;display:flex;align-items:center;justify-content:center;padding:8px 20px;background:#fff;-webkit-box-shadow:0 -2px 4px 0 rgb(173 173 173 / 30%);-moz-box-shadow:0 -2px 4px 0 rgb(173 173 173 / 30%);box-shadow:0 -2px 4px 0 rgb(173 173 173 / 30%);transition: all ease .3s;bottom: -70px;z-index:9999;}.floating-cta a{height:48px;display:inline-block;background:#ffc30e;border-radius:3px;color:#000;text-align:center;font-size:16px;font-family: "proxima-nova", sans-serif;font-weight: 700;line-height:48px;padding:0 30px;border:none;transition:all .3s cubic-bezier(.25,.8,.25,1);position:relative;z-index:1;width:auto;}}@media screen and (max-width:641px){.floating-cta a{width:100%;}}</style>
<div class="floating-cta">
         <a rel="nofollow" id="sales-header" href="https://www.chennee.in/get-quote.php" title="Get a free quote">Get A Free Quote</a>
         </div>
{{-- <script>
    function exitForm(){
        console.log("form working");
        $(".discovery-popup").css({"opacity": "0", "visibility": "hidden"});
     discoverFormSubmit();
 }
function formSubmit(){
  console.log("first form");
            if($('#txtname').val()=='' && $('#txtlname').val()=='' && $('#txtphone').val()=='' && $('#txtemail').val()=='' && $('#interested_in input[type=checkbox]:checked').length == 0 && $('#message').val()==''){
              $('#errorname, #errorlname, #errorphone, #erroremail, #errorinterested_in, #errormessage').show();
              $('#txtname, #txtlname, #txtphone, #txtemail, #interested_in label,  #message').addClass('focus-visible');
              return false;
           }else{
              $('#errorname, #errorlname, #errorphone, #erroremail, #errorinterested_in, #errormessage').hide();
              $('#txtname, #txtlname, #txtphone, #txtemail, #interested_in label,  #message').removeClass('focus-visible');
           }
           if($('#txtname').val()==''){
               $('#errorname').show();
               $('#txtname').focus();
               return false;
           }else{
               $('#errorname').hide();
           }
           if($('#txtlname').val()==''){
               $('#errorlname').show();
               $('#txtlname').focus();
               return false;
           }else{
               $('#errorlname').hide();
           }
           if($('#txtphone').val()==''){
               $('#errorphone').show();
               $('#txtphone').focus();
               return false;
           }else{
               $('#errorphone').hide();
           }

            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var inputText = $('#txtemail').val();
          if(inputText.match(mailformat))
          {
              $('#erroremail').hide();
          }else{
              $('#erroremail').show();
              $('#txtemail').focus();
              return false;
          }
          if($('#interested_in input[type=checkbox]:checked').length == 0)
          {
              $('#errorinterested_in').show();
              $('#interested_in label').addClass('focus-visible');
               return false;
          }else{
               $('#errorinterested_in').hide();
              $('#interested_in label').removeClass('focus-visible');
           }
          if($('#message').val()==''){
              $('#errormessage').show();
              $('#message').focus();
               return false;
           }else{
               $('#errormessage').hide();
           }

            $('#popup-title span').html($('#txtname').val());
            $('#ajx-loader').show();
            $('.discovery-popup')
            .delay(2000)
            .queue(function (next) {
              $(this).css({"opacity": "1", "visibility": "visible"});
              next();
              $('#ajx-loader').hide();
           });
           //$(".discovery-popup").css({"opacity": "1", "visibility": "visible"});
          setTimeout(discoverFormSubmit, 60000);
       }

       function discoverFormSubmit(){
          console.log("form");
           $.ajax({
                 url: "{{ route('contact.save') }}",
                 type: "POST",
                 data: {
                     firstName: $("#txtname").val(),
                     lastName: $("#txtlname").val(),
                     phone: $("#txtphone").val(),
                     email: $("#txtemail").val(),
                     service1: $('#interested_in input[id=checkbox5]:checked').val(),
                     service2: $('#interested_in input[id=checkbox6]:checked').val(),
                     service3: $('#interested_in input[id=checkbox7]:checked').val(),
                     service4: $('#interested_in input[id=checkbox8]:checked').val(),
                     service5: $('#interested_in input[id=checkbox9]:checked').val(),
                     message: $("#message").val(),
                     sitearea: $('input[name="site_area"]:checked').val(),
                     location: $('input[name="site_areas"]:checked').val(),
                     building: $('input[name="building_type"]:checked').val(),
                     bedroom: $('input[name="bedrooms"]:checked').val(),
                     brick: $('input[name="material"]:checked').val(),
                     plan: $('input[name="execution_time"]:checked').val(),
                     call: $('input[name="call_time"]:checked').val(),
                     subt: 'Contact Sales',
                     _token: '{{ csrf_token() }}',
                 },
                 dataType: "JSON",
                 success: function (jsonStr) {
                  //    if(jsonStr=='success'){
                      console.log("mail sent");
                      //    window.location="thankyou.php";
                  //    }

                 }
             });
             $("#discover-submit-button").html("Submitting..");
             window.setTimeout(function(){
              $(".discovery-popup").css({"opacity": "0", "visibility": "hidden"});
              // Move to a new location or you can do something else
              window.location.href = "{{ route('thank.you') }}";

              }, 2000);

       }
</script> --}}
@endsection
