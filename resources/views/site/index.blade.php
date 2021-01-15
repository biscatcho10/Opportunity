@extends('layouts.app')

@section('title', 'Protal Home Page Pending')

@section('content')
    <!-- Dark Nav -->
    @include('site.includes.dark_nav1')


    <!-- Welcome Div -->
    <div class="welcome">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-6 welcome-text">
                <p class="lead">
                    The VB Healthcare Angel Network (“VBHAN”)
                    platform provides qualified investors with exclusive
                    access to co-invest with VB, the leading investor in
                    the $188 billion neuromusculosketetal (NMS)
                    sector.
                </p>
                <a href="html/Applynow.html">
                    <button class="text-capitalize apply">apply now</button>
                </a>
            </div>
            <div class="col-md-6 welcome-img">
            </div>
            </div>
        </div>
    </div>


    <section class="benefits text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 mb-2">
                    <h2 class="font-weight-bold text-uppercase">VBHAN Members Benefits</h2>
                    <p>VBHAN membership is paid annually and requires a minimum investment
                        in opportunities presented over the coming year in order to continue.
                    </p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="img-logo rounded-circle">
                            <svg class="my-4" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27.3822 9.68242C27.9757 9.68183 28.5447 9.44582 28.9643 9.02619C29.3839 8.60656 29.6199 8.03758 29.6205 7.44413V6.26816C29.6085 5.68258 29.3675 5.12504 28.9491 4.71515C28.5308 4.30526 27.9684 4.07568 27.3827 4.07568C26.797 4.07568 26.2346 4.30526 25.8163 4.71515C25.3979 5.12504 25.1569 5.68258 25.1449 6.26816V7.44449C25.1456 8.03771 25.3815 8.60645 25.8009 9.02598C26.2203 9.44551 26.789 9.68158 27.3822 9.68242Z" fill="white"/>
                                <path d="M43.1002 7.34766C43.596 7.3471 44.0713 7.1499 44.4219 6.79931C44.7726 6.44873 44.9698 5.97339 44.9704 5.47758V4.44832C44.9704 3.95231 44.7733 3.47662 44.4226 3.12589C44.0719 2.77516 43.5962 2.57813 43.1002 2.57812C42.6042 2.57813 42.1285 2.77516 41.7777 3.12589C41.427 3.47662 41.23 3.95231 41.23 4.44832V5.4777C41.2306 5.97349 41.4278 6.4488 41.7784 6.79936C42.129 7.14991 42.6044 7.3471 43.1002 7.34766Z" fill="white"/>
                                <path d="M35.7885 36.504H34.8469V41.3568H35.7885V36.504Z" fill="white"/>
                                <path d="M37.7255 19.0448C37.7918 19.1115 37.8707 19.1644 37.9577 19.2004C38.0446 19.2364 38.1378 19.2548 38.2319 19.2546C38.4266 19.248 38.611 19.165 38.745 19.0235C38.8789 18.882 38.9518 18.6934 38.9478 18.4986C38.9477 18.313 39.0211 18.1349 39.1519 18.0032C39.2826 17.8715 39.4601 17.7968 39.6457 17.7955H39.651C39.8357 17.7955 40.0129 17.8681 40.1445 17.9977C40.2761 18.1273 40.3514 18.3034 40.3541 18.4881L40.4346 23.9108C42.1251 24.6667 43.6624 25.7267 44.9698 27.0381C45.2524 27.3207 45.5224 27.6126 45.7797 27.9137L46.0317 19.0482L46.0244 18.6002C46.0244 18.5793 46.0234 18.5584 46.0234 18.5375C46.0234 18.352 46.0967 18.174 46.2274 18.0423C46.358 17.9106 46.5354 17.8359 46.7209 17.8344H46.7267C46.9111 17.8344 47.0882 17.9068 47.2198 18.0362C47.3513 18.1655 47.4267 18.3413 47.4298 18.5258L47.4305 18.5652C47.4349 18.6767 47.4653 18.7856 47.5191 18.8833C47.5729 18.9811 47.6487 19.065 47.7406 19.1284C47.8433 19.1981 47.962 19.241 48.0856 19.253C48.2092 19.265 48.3339 19.2458 48.4482 19.1972C48.5744 19.1445 48.6818 19.0549 48.7562 18.9402C48.8306 18.8254 48.8686 18.6909 48.8652 18.5541V12.226C48.8652 12.2023 48.8664 12.1787 48.8689 12.1551C48.9213 11.6381 48.7674 11.1213 48.4406 10.7172C48.1138 10.3132 47.6406 10.0546 47.124 9.99782C46.9675 9.99313 46.0307 9.98915 45.2671 9.98704L43.8005 12.5436C43.7383 12.6521 43.6482 12.742 43.5397 12.8041C43.4311 12.8662 43.308 12.8982 43.1829 12.8968C43.0579 12.8955 42.9354 12.8608 42.8283 12.7964C42.7211 12.7319 42.633 12.64 42.5732 12.5302L41.1863 9.98645H39.4725C38.9501 9.98704 38.4492 10.1948 38.0798 10.5642C37.7104 10.9336 37.5025 11.4344 37.5019 11.9568C37.5019 12.0468 37.5155 18.5372 37.5155 18.5372C37.5151 18.6315 37.5335 18.7249 37.5696 18.812C37.6056 18.8992 37.6586 18.9783 37.7255 19.0448Z" fill="white"/>
                                <path d="M31.1882 40.0091H30.2466V41.3568H31.1882V40.0091Z" fill="white"/>
                                <path d="M34.2757 48.6295C36.431 48.6296 38.538 47.9904 40.3301 46.793C42.1222 45.5956 43.519 43.8936 44.3439 41.9023C45.1687 39.9111 45.3845 37.7199 44.964 35.606C44.5436 33.492 43.5057 31.5502 41.9816 30.0262C40.4576 28.5021 38.5158 27.4642 36.4019 27.0437C34.2879 26.6232 32.0968 26.839 30.1055 27.6638C28.1142 28.4886 26.4122 29.8854 25.2148 31.6775C24.0173 33.4696 23.3782 35.5766 23.3782 37.7319C23.3815 40.6211 24.5307 43.391 26.5736 45.434C28.6166 47.477 31.3865 48.6262 34.2757 48.6295ZM38.0409 32.6725C38.0409 32.486 38.115 32.3071 38.2469 32.1753C38.3787 32.0434 38.5576 31.9693 38.744 31.9693H41.092C41.2785 31.9693 41.4573 32.0434 41.5892 32.1753C41.7211 32.3071 41.7951 32.486 41.7951 32.6725V42.0599C41.7951 42.2464 41.7211 42.4252 41.5892 42.5571C41.4573 42.6889 41.2785 42.763 41.092 42.763H38.744C38.5576 42.763 38.3787 42.6889 38.2469 42.5571C38.115 42.4252 38.0409 42.2464 38.0409 42.0599V32.6725ZM33.4406 35.8008C33.4406 35.6143 33.5147 35.4355 33.6465 35.3036C33.7784 35.1717 33.9572 35.0977 34.1437 35.0977H36.4922C36.6786 35.0977 36.8575 35.1717 36.9894 35.3036C37.1212 35.4355 37.1953 35.6143 37.1953 35.8008V42.0598C37.1953 42.2462 37.1212 42.4251 36.9894 42.5569C36.8575 42.6888 36.6786 42.7629 36.4922 42.7629H34.1437C33.9572 42.7629 33.7784 42.6888 33.6465 42.5569C33.5147 42.4251 33.4406 42.2462 33.4406 42.0598V35.8008ZM28.8398 39.306C28.8398 39.1195 28.9139 38.9407 29.0458 38.8088C29.1776 38.6769 29.3565 38.6029 29.5429 38.6029H31.8908C32.0773 38.6029 32.2561 38.6769 32.388 38.8088C32.5198 38.9407 32.5939 39.1195 32.5939 39.306V42.0599C32.5939 42.2464 32.5198 42.4252 32.388 42.5571C32.2561 42.6889 32.0773 42.763 31.8908 42.763H29.5429C29.3565 42.763 29.1776 42.6889 29.0458 42.5571C28.9139 42.4252 28.8398 42.2464 28.8398 42.0599V39.306ZM26.5748 33.4535C26.5748 33.267 26.6489 33.0882 26.7808 32.9563C26.9126 32.8245 27.0915 32.7504 27.2779 32.7504C27.4644 32.7504 27.6433 32.8245 27.7751 32.9563C27.907 33.0882 27.9811 33.267 27.9811 33.4535V43.6577H41.3906C41.5771 43.6577 41.7559 43.7318 41.8878 43.8637C42.0196 43.9955 42.0937 44.1744 42.0937 44.3609C42.0937 44.5473 42.0196 44.7262 41.8878 44.858C41.7559 44.9899 41.5771 45.064 41.3906 45.064H27.2779C27.0915 45.064 26.9126 44.9899 26.7808 44.858C26.6489 44.7262 26.5748 44.5473 26.5748 44.3609V33.4535Z" fill="white"/>
                                <path d="M34.2757 51.4427C37.4477 51.4406 40.5209 50.3388 42.9716 48.325C45.4223 46.3112 47.099 43.5099 47.7159 40.3985C48.3329 37.2871 47.8519 34.058 46.355 31.2614C44.8581 28.4648 42.4378 26.2738 39.5066 25.0615C36.5754 23.8493 33.3145 23.6909 30.2796 24.6134C27.2447 25.5358 24.6235 27.482 22.8626 30.1203C21.1017 32.7586 20.3101 35.9259 20.6226 39.0825C20.935 42.239 22.3323 45.1896 24.5763 47.4315C25.8491 48.706 27.3613 49.7165 29.0258 50.4049C30.6903 51.0933 32.4745 51.446 34.2757 51.4427ZM34.2757 25.428C36.7092 25.428 39.088 26.1496 41.1114 27.5015C43.1348 28.8535 44.7118 30.7751 45.6431 33.0233C46.5744 35.2715 46.818 37.7454 46.3433 40.1322C45.8686 42.5189 44.6967 44.7112 42.976 46.432C41.2553 48.1527 39.063 49.3246 36.6762 49.7993C34.2895 50.2741 31.8156 50.0304 29.5674 49.0992C27.3191 48.1679 25.3975 46.5909 24.0455 44.5676C22.6936 42.5442 21.972 40.1654 21.972 37.7319C21.9756 34.4698 23.2731 31.3424 25.5797 29.0358C27.8863 26.7292 31.0137 25.4317 34.2757 25.428Z" fill="white"/>
                                <path d="M21.1687 23.021C21.2538 23.1067 21.3551 23.1746 21.4666 23.2209C21.5782 23.2671 21.6978 23.2908 21.8185 23.2905C22.0677 23.2829 22.3038 23.1773 22.4757 22.9968C22.6476 22.8163 22.7415 22.5753 22.7371 22.3261C22.7356 22.1396 22.8084 21.9602 22.9392 21.8274C23.0701 21.6945 23.2484 21.6191 23.4348 21.6176C23.6213 21.6162 23.8007 21.6889 23.9336 21.8198C24.0665 21.9507 24.1419 22.129 24.1433 22.3154L24.1529 22.9482L24.2169 26.4391C26.9285 24.0102 30.4306 22.6497 34.0709 22.6111V15.158C34.0709 15.1345 34.0721 15.111 34.0745 15.0877C34.1371 14.4697 33.9528 13.8522 33.5618 13.3696C33.1708 12.8871 32.6048 12.5787 31.9874 12.5119C31.8158 12.5062 30.6906 12.5016 29.8002 12.4991L28.0949 15.4717C28.0333 15.5789 27.9446 15.6681 27.8376 15.7301C27.7306 15.7921 27.6092 15.8248 27.4855 15.8249H27.4779C27.3529 15.8235 27.2305 15.7887 27.1234 15.7243C27.0163 15.6598 26.9283 15.568 26.8685 15.4582L25.2553 12.498H23.2364C22.6125 12.498 22.0141 12.7459 21.5729 13.187C21.1317 13.6281 20.8838 14.2264 20.8837 14.8504C20.8837 14.9514 20.8992 22.2968 20.8993 22.371C20.899 22.4918 20.9227 22.6114 20.969 22.723C21.0152 22.8345 21.0831 22.9358 21.1687 23.021Z" fill="white"/>
                                <path d="M40.3889 33.3756H39.4472V41.3568H40.3889V33.3756Z" fill="white"/>
                                <path d="M11.6901 7.34766C12.186 7.3471 12.6613 7.1499 13.0119 6.79931C13.3625 6.44873 13.5597 5.97339 13.5603 5.47758V4.44832C13.5603 3.95231 13.3633 3.47662 13.0126 3.12589C12.6618 2.77516 12.1861 2.57813 11.6901 2.57812C11.1941 2.57813 10.7184 2.77516 10.3677 3.12589C10.017 3.47662 9.81995 3.95231 9.81995 4.44832V5.4777C9.82057 5.97349 10.0178 6.4488 10.3684 6.79936C10.719 7.14991 11.1943 7.3471 11.6901 7.34766Z" fill="white"/>
                                <path d="M6.82181 19.2546C7.01656 19.248 7.20087 19.165 7.33484 19.0235C7.46881 18.882 7.54165 18.6934 7.53759 18.4986C7.53759 18.313 7.61093 18.135 7.74163 18.0033C7.87232 17.8716 8.04978 17.7969 8.23533 17.7955H8.24084C8.42546 17.7955 8.60269 17.868 8.73425 17.9976C8.8658 18.1271 8.94113 18.3032 8.94396 18.4878L8.95252 19.0418L9.33255 31.8991C9.33741 31.9203 9.34934 31.9392 9.36639 31.9527C9.38343 31.9662 9.40457 31.9734 9.4263 31.9733H14.1739C14.1957 31.9734 14.2168 31.9661 14.2339 31.9526C14.2509 31.939 14.2628 31.9201 14.2677 31.8989L14.6222 19.0487L14.6147 18.602C14.6147 18.5805 14.6137 18.5591 14.6137 18.5375C14.6137 18.352 14.687 18.174 14.8176 18.0423C14.9483 17.9106 15.1256 17.8359 15.3111 17.8344H15.317C15.5014 17.8344 15.6785 17.9068 15.8101 18.0362C15.9416 18.1655 16.017 18.3413 16.0201 18.5258L16.0208 18.5661C16.0276 18.7543 16.1081 18.9324 16.2449 19.0618C16.3818 19.1912 16.564 19.2616 16.7523 19.2578C16.9407 19.2541 17.12 19.1764 17.2515 19.0416C17.3831 18.9069 17.4564 18.7257 17.4556 18.5374V12.2265C17.4556 12.2028 17.4568 12.1791 17.4593 12.1556C17.511 11.6387 17.3569 11.1223 17.0302 10.7184C16.7036 10.3145 16.2308 10.0558 15.7146 9.99829C15.5579 9.9936 14.6211 9.98961 13.8575 9.9875L12.3908 12.5442C12.3286 12.6527 12.2385 12.7426 12.13 12.8047C12.0214 12.8667 11.8982 12.8987 11.7732 12.8974C11.6481 12.896 11.5257 12.8613 11.4185 12.7968C11.3114 12.7324 11.2233 12.6405 11.1635 12.5307L9.77611 9.98645H8.06248C7.8037 9.98642 7.54744 10.0374 7.30835 10.1364C7.06926 10.2354 6.85201 10.3805 6.66901 10.5635C6.48601 10.7464 6.34084 10.9637 6.24179 11.2027C6.14274 11.4418 6.09175 11.6981 6.09174 11.9568C6.09174 12.0468 6.10545 18.5372 6.10545 18.5372C6.10548 18.7272 6.18093 18.9095 6.31524 19.044C6.44954 19.1785 6.63173 19.2543 6.82181 19.2546Z" fill="white"/>
                                <path d="M47.7431 50.2049L45.2344 47.6953L44.2401 48.6899L46.7492 51.1989L45.7381 52.21C45.6619 52.2861 45.6014 52.3766 45.5602 52.4761C45.519 52.5756 45.4978 52.6823 45.4978 52.79C45.4978 52.8978 45.519 53.0044 45.5602 53.104C45.6014 53.2035 45.6619 53.2939 45.7381 53.3701L50.3426 57.9747C50.6131 58.2451 50.9342 58.4597 51.2875 58.606C51.6409 58.7524 52.0197 58.8277 52.4022 58.8277C52.7847 58.8277 53.1635 58.7524 53.5168 58.606C53.8702 58.4596 54.1913 58.2451 54.4618 57.9746C54.7323 57.7041 54.9468 57.383 55.0932 57.0296C55.2395 56.6762 55.3149 56.2975 55.3149 55.915C55.3149 55.5325 55.2395 55.1537 55.0931 54.8003C54.9468 54.4469 54.7322 54.1259 54.4617 53.8554L49.8572 49.2509C49.781 49.1747 49.6906 49.1142 49.5911 49.073C49.4915 49.0318 49.3848 49.0106 49.2771 49.0106C49.1694 49.0106 49.0627 49.0318 48.9632 49.073C48.8637 49.1142 48.7732 49.1747 48.697 49.2509L47.7431 50.2049Z" fill="white"/>
                            </svg>

                        </div>
                        <h4 class="font-weight-bold">Due Diligence</h4>
                        <p>We evaluate between 250 to
                            800 NMS opportunities anually.
                            Only a handful make it through
                            our exhastive process.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="img-logo rounded-circle">
                            <svg class="my-4" width="54" height="56" viewBox="0 0 54 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.3431 11.9941H21.2287V13.9499H23.1525V11.0162C23.1525 10.7568 23.0511 10.5081 22.8707 10.3247C22.6904 10.1413 22.4457 10.0382 22.1906 10.0382H20.1793C21.9386 7.45265 25.4552 2.28929 27.0144 0C27.9879 1.4698 29.9337 4.33018 33.8207 10.0382H31.8094C31.5543 10.0382 31.3096 10.1413 31.1293 10.3247C30.9489 10.5081 30.8475 10.7568 30.8475 11.0162V13.9499H32.7713V11.9941H35.6569H35.6723L34.0775 14.341L32.4019 16.8005C31.9932 15.6788 31.2564 14.7112 30.2907 14.0279C29.325 13.3447 28.1766 12.9784 27 12.9784C25.8234 12.9784 24.675 13.3447 23.7093 14.0279C22.7436 14.7112 22.0068 15.6788 21.5981 16.8005L18.3277 11.9941H18.3431ZM33.7332 24.7323C32.9056 24.0851 31.8916 23.7326 30.8475 23.729H30.1838C30.9255 23.2265 31.5436 22.5573 31.9902 21.7732H33.7332V24.7323ZM30.8475 29.5964V50.1325H27.9619V38.3976H26.0381V50.1325H23.1525C23.1525 47.1783 23.1525 38.5336 23.1525 38.4035V29.5964H21.2287V37.4197H20.2668V28.6185C20.2668 27.8405 20.5709 27.0942 21.112 26.5441C21.6532 25.9939 22.3872 25.6848 23.1525 25.6848H30.8475C31.6128 25.6848 32.3468 25.9939 32.888 26.5441C33.4291 27.0942 33.7332 27.8405 33.7332 28.6185V37.4197H32.7713V29.5964H30.8475ZM23.8162 23.729H23.1525C22.1084 23.7326 21.0944 24.0851 20.2668 24.7323V21.7732H22.0098C22.4564 22.5573 23.0745 23.2265 23.8162 23.729ZM27 22.7511C26.239 22.7511 25.4952 22.5217 24.8624 22.0918C24.2297 21.662 23.7366 21.0511 23.4454 20.3363C23.1541 19.6216 23.0779 18.8351 23.2264 18.0763C23.3749 17.3175 23.7413 16.6205 24.2794 16.0735C24.8175 15.5264 25.503 15.1539 26.2494 15.003C26.9957 14.852 27.7693 14.9295 28.4724 15.2255C29.1754 15.5216 29.7763 16.023 30.1991 16.6662C30.6219 17.3095 30.8475 18.0658 30.8475 18.8394C30.8475 19.8769 30.4422 20.8718 29.7206 21.6054C28.9991 22.339 28.0204 22.7511 27 22.7511ZM40.2259 56L35.6175 40.0777L33.7726 40.6292L38.2203 56H15.7797L20.2274 40.6292L18.3825 40.0777L13.7741 56H0L10.472 40.9177C10.5866 40.7526 10.6481 40.5555 10.648 40.3534V20.7952C10.648 20.5359 10.5467 20.2872 10.3663 20.1038C10.1859 19.9204 9.94125 19.8173 9.68614 19.8173H7.67485C9.43317 17.2337 12.946 12.0752 14.5042 9.78399C15.3997 11.1335 17.1215 13.6624 20.4284 18.5187L21.3153 19.8173H19.305C19.0498 19.8173 18.8052 19.9204 18.6248 20.1038C18.4444 20.2872 18.3431 20.5359 18.3431 20.7952V38.3976C18.3431 38.657 18.4444 38.9057 18.6248 39.0891C18.8052 39.2725 19.0498 39.3755 19.305 39.3755H21.2287C21.2287 39.6689 21.2287 40.0004 21.2287 40.3838V51.1105C21.2287 51.3698 21.3301 51.6185 21.5104 51.8019C21.6908 51.9853 21.9355 52.0884 22.1906 52.0884H31.8094C32.0645 52.0884 32.3092 51.9853 32.4896 51.8019C32.6699 51.6185 32.7713 51.3698 32.7713 51.1105V39.3755H34.695C34.9502 39.3755 35.1948 39.2725 35.3752 39.0891C35.5556 38.9057 35.6569 38.657 35.6569 38.3976V28.6185C35.6569 28.5403 35.6377 28.4679 35.6338 28.3907H35.6569V20.7952C35.6569 20.5359 35.5556 20.2872 35.3752 20.1038C35.1948 19.9204 34.9502 19.8173 34.695 19.8173H32.6847L35.6569 15.4471C37.6461 12.527 38.8119 10.8147 39.4958 9.78986L46.3252 19.8173H44.3139C44.0588 19.8173 43.8141 19.9204 43.6337 20.1038C43.4533 20.2872 43.352 20.5359 43.352 20.7952V40.3534C43.3519 40.5555 43.4134 40.7526 43.528 40.9177L54 56H40.2259Z" fill="white"/>
                            </svg>

                        </div>
                        <h4 class="font-weight-bold">Track Record</h4>
                        <p>Over 21 years, we have
                            founded,built, operated grown &
                            exited 16 NMS companies resulting
                            in more than $2.1 billion in capoital
                            return to our lenders and investors.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="img-logo rounded-circle">
                            <svg class="my-4" width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.7573 47.5491L14.0948 49.2407H16.3757L16.7137 47.5491L15.2353 48.4354L13.7573 47.5491Z" fill="white"/>
                                <path d="M19.0972 43.3685C17.9601 44.0289 16.6429 44.4132 15.2352 44.4132C13.8275 44.4132 12.5108 44.0289 11.3733 43.3685V43.8668L15.2352 46.1839L19.0972 43.8668V43.3685Z" fill="white"/>
                                <path d="M21.0282 36.6892V32.4171C18.8964 33.318 16.5831 33.7928 14.2697 33.7928H13.3043V32.2366L9.44229 33.5236V36.6902C9.44229 39.8851 12.0403 42.4831 15.2352 42.4831C18.4301 42.4831 21.0282 39.8841 21.0282 36.6892Z" fill="white"/>
                                <path d="M22.9591 36.421C23.5338 36.0858 23.9247 35.4701 23.9247 34.7583C23.9247 34.0469 23.5338 33.4307 22.9591 33.0959V36.421Z" fill="white"/>
                                <path d="M25.0136 25.7898C25.6114 24.7027 26.6066 23.8706 27.838 23.5001L34.545 21.4889V20.6785C33.506 19.6362 32.8267 18.7556 32.6565 17.2201C30.8589 16.5889 29.7176 14.2063 29.7176 12.552V8.69006C29.7176 6.99951 30.1386 5.34667 30.8966 3.86261H9.44229V21.0415C11.1097 19.9507 13.0978 19.3114 15.2352 19.3114C19.6224 19.3105 23.3966 21.9858 25.0136 25.7898ZM15.2352 6.75908H27.7866V8.69006H15.2352V6.75908ZM11.3733 6.75908H13.3043V8.69006H11.3733V6.75908ZM11.3733 10.621H27.7866V12.552H11.3733V10.621ZM11.3733 14.483H27.7866V16.414H11.3733V14.483Z" fill="white"/>
                                <path d="M7.5113 29.9308H9.44228V31.4884L15.2352 29.5565V31.8302C17.2407 31.7024 19.2226 31.1735 21.0282 30.2909V29.9298H22.9591V31.0325C23.3028 31.1216 23.6253 31.2574 23.9246 31.4323V29.9298C23.9246 25.1382 20.0268 21.2404 15.2352 21.2404C10.4436 21.2404 6.54581 25.1382 6.54581 29.9298V31.4323C6.84517 31.2574 7.16762 31.1216 7.5113 31.0325V29.9308Z" fill="white"/>
                                <path d="M7.51133 36.4211V33.0969C6.93711 33.4316 6.54581 34.0478 6.54581 34.7592C6.54581 35.4711 6.93711 36.0859 7.51133 36.4211Z" fill="white"/>
                                <path d="M49.7006 3.86261C50.5006 5.4056 50.9584 7.16168 50.9584 9.02148V12.552C50.9584 14.2063 49.817 16.5889 48.0195 17.2201C47.8498 18.7556 47.17 19.6362 46.1309 20.6785V21.4889L52.8304 23.4991C54.1495 23.8937 55.2055 24.813 55.7858 26.0109V3.86261H49.7006Z" fill="white"/>
                                <path d="M52.2765 25.349L44.1999 22.9253V19.8695L44.4908 19.5857C45.709 18.3925 46.1309 17.9037 46.1309 16.4139V15.4485H47.0964C48.0293 15.4485 49.0274 13.7485 49.0274 12.552V9.02144C49.0274 4.26847 45.4657 0.314583 40.9192 0.0199389C38.4824 -0.142233 36.1682 0.689371 34.3975 2.34975C32.6249 4.01154 31.6485 6.2631 31.6485 8.69002V12.552C31.6485 13.7485 32.647 15.4485 33.5795 15.4485H34.545V16.4139C34.545 17.9037 34.9669 18.3925 36.1856 19.5857L36.476 19.8695V22.9253L28.3938 25.3499C27.3491 25.6634 26.5788 26.5275 26.3817 27.6052L25.8556 30.4989V34.7592H55.5949L54.2942 27.6052C54.0971 26.5275 53.3249 25.6625 52.2765 25.349ZM40.338 9.65551C41.9352 9.65551 43.2344 10.9552 43.2344 12.552C43.2344 13.8093 42.4245 14.8714 41.3034 15.2712V16.4139H39.3725V15.2712C38.2514 14.8714 37.4415 13.8093 37.4415 12.552H39.3725C39.3725 13.0852 39.8052 13.5175 40.338 13.5175C40.8711 13.5175 41.3034 13.0852 41.3034 12.552C41.3034 12.0193 40.8711 11.5865 40.338 11.5865C38.7412 11.5865 37.4415 10.2872 37.4415 8.69002C37.4415 7.43319 38.2514 6.37105 39.3725 5.97128V4.82806H41.3034V5.97128C42.4245 6.37105 43.2344 7.43319 43.2344 8.69002H41.3034C41.3034 8.1573 40.8711 7.72453 40.338 7.72453C39.8052 7.72453 39.3725 8.1573 39.3725 8.69002C39.3725 9.22321 39.8052 9.65551 40.338 9.65551Z" fill="white"/>
                                <path d="M10.2767 45.4607L3.25146 47.5685C2.22421 47.8768 1.45389 48.7216 1.24363 49.7748L0 55.999H5.70903L6.55571 50.0694L8.46737 50.3424L7.65886 55.9981H11.5006L12.3241 50.2306L11.5189 46.2051L10.2767 45.4607Z" fill="white"/>
                                <path d="M27.2181 47.5685L20.1933 45.4607L18.9506 46.206L18.1454 50.2316L18.969 55.9991H22.8106L22.0026 50.3433L23.9143 50.0703L24.761 56H30.47L29.2254 49.7757C29.0156 48.7216 28.2462 47.8768 27.2181 47.5685Z" fill="white"/>
                                <path d="M14.1425 51.1716L13.4518 55.9991H17.0187L16.328 51.1716H14.1425Z" fill="white"/>
                            </svg>

                        </div>
                        <h4 class="font-weight-bold">Advisory Roles</h4>
                        <p>VBHAN members have the
                            opportunity to apply for paid
                            medical, clinical, scientific, or
                            business-strategy board advisor
                            roles.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="builder pt-4">
        <div class="row mt-5 show">
            <div class="col-sm-12 col-md-2 col-lg-2 magenta"></div>
            <div class="col-sm-12 col-md-4 col-lg-4 photo"></div>
            <div class="col-sm-12 col-md-6 col-lg-6  white">
                <div class="container ml-5">
                    <div class="row">
                        <h2 class="text-capitalize font-weight-bold">We are business builders</h2>
                    </div>
                    <div class="row">
                        <p class="col-9 mt-3">
                            VB focuses on creating tangible solutions that
                            develop into sustainable businesses. We invest in
                            companies focused on addressing unmet needs,
                            while saving the healthcare system money.
                            Our focus goes beyond serving the population
                            today; we strive to create a better healthcare
                            environment for future generations.
                        </p>
                    </div>
                    <div class="row">
                        <a href="html/Applynow.html" class="mt-5 text-uppercase">Apply Now</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="white-line"></div>
@endsection