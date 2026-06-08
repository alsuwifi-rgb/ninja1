@section('styles')
    @parent
    <style>
        .table > :not(caption) > * > * {
            background-color: transparent;
        }
    </style>
@endsection
<div class="container-fluid ">
    <div class="hr-parent ">
        {{-- The HTML structure remains the same --}}
        <div class="hr-widget with-border home-gradient  position-relative overflow-hidden">
            <img class="card-background" src="{{asset('images/icon.png')}}" alt="ninja-logo"/>

            <div class="d-flex  justify-content-between align-items-center">
                <div class="">
                    <h6>{{ auth()->user()?->roles()?->value('title') }}</h6>
                    <h2 class="text-success">{{ trans('cruds.hr_home.greeting', ['name' => auth()->user()?->name]) }}</h2>
                    <h6>{{ auth()->user()?->address }}</h6>
                </div>
                <div class="">
                    <div class="d-flex align-items-center justify-content-between">
                        <i class="material-icons-outlined sun-icon ">light_mode</i>
                        <div class="mx-2">
                            <h5>{{now()->format('h:i:s A')}}</h5>
                            <h6 class="text-success">{{ trans('cruds.hr_home.realtime_insight') }}</h6>
                        </div>
                    </div>
                    <h6 class="text-center mt-2">{{now()->format('jS F Y')}}</h6>
                </div>
            </div>

            <a href="{{route('admin.attendances.index')}}"
               class="mt-5 d-flex justify-content-center ">
                <button
                    class="btn hr-attendance-btn btn-success rounded w-75">{{__('global.view') .' '. __('cruds.attendance.title')}}</button>
            </a>
        </div>

        <div class="card1 responsive-widget home-gradient with-border p-3 d-flex flex-column  ">
            <div class="card1-header d-flex justify-content-between align-items-center ">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1_1560)">
                        <path
                            d="M15.9111 15.3778C18.3111 15.3778 20.1778 13.4222 20.1778 11.0222C20.1778 8.62222 18.2222 6.75555 15.8222 6.75555C13.4222 6.75555 11.5555 8.71111 11.5555 11.0222C11.5555 13.4222 13.5111 15.3778 15.9111 15.3778ZM15.8222 8.53333C15.9111 8.53333 15.9111 8.53333 15.8222 8.53333C17.2444 8.53333 18.4 9.68889 18.4 11.1111C18.4 12.5333 17.2444 13.6 15.8222 13.6C14.4 13.6 13.3333 12.4444 13.3333 11.1111C13.3333 9.68889 14.4889 8.53333 15.8222 8.53333Z"
                            fill="white"/>
                        <path
                            d="M29.0667 14.8445C27.3778 13.3333 25.1556 12.5333 22.8445 12.6222H22.1334C21.9556 13.3333 21.6889 13.9556 21.3334 14.4889C21.8667 14.4 22.3112 14.4 22.8445 14.4C24.5334 14.3111 26.2223 14.8445 27.5556 15.8222V22.2222H29.3334V15.1111L29.0667 14.8445Z"
                            fill="white"/>
                        <path
                            d="M20.8 6.93335C21.2444 5.86668 22.4889 5.33335 23.6444 5.77779C24.7111 6.22223 25.2444 7.46668 24.8 8.62223C24.4444 9.42224 23.6444 9.95557 22.8444 9.95557C22.6667 9.95557 22.4 9.95557 22.2222 9.86668C22.3111 10.3111 22.3111 10.7556 22.3111 11.1111V11.6445C22.4889 11.6445 22.6667 11.7333 22.8444 11.7333C25.0667 11.7333 26.8444 9.95557 26.8444 7.82224C26.8444 5.60001 25.0667 3.82224 22.9333 3.82224C21.5111 3.82224 20.2667 4.53335 19.5555 5.77779C20 6.04446 20.4444 6.40001 20.8 6.93335Z"
                            fill="white"/>
                        <path
                            d="M10.6667 14.5778C10.3111 14.0444 10.0445 13.4222 9.86669 12.7111H9.15558C6.84447 12.6222 4.62224 13.4222 2.93335 14.8444L2.66669 15.1111V22.2222H4.44446V15.8222C5.86669 14.8444 7.46669 14.3111 9.15558 14.4C9.68891 14.4 10.2222 14.4889 10.6667 14.5778Z"
                            fill="white"/>
                        <path
                            d="M9.15555 11.6444C9.33332 11.6444 9.5111 11.6444 9.68888 11.5556V11.0222C9.68888 10.5778 9.68888 10.1333 9.77777 9.77778C9.59999 9.86667 9.33332 9.86667 9.15555 9.86667C7.99999 9.86667 7.02221 8.88889 7.02221 7.73334C7.02221 6.57778 7.99999 5.6 9.15555 5.6C10.0444 5.6 10.8444 6.13334 11.2 6.93334C11.5555 6.48889 12.0889 6.04445 12.5333 5.68889C11.3778 3.82223 8.97777 3.2 7.1111 4.35556C5.24444 5.51111 4.62221 7.91111 5.77777 9.77778C6.48888 10.9333 7.73332 11.6444 9.15555 11.6444Z"
                            fill="white"/>
                        <path
                            d="M23.2 20.1778L23.0222 19.9111C21.2445 17.9555 18.7556 16.8 16.0889 16.8889C13.4222 16.8 10.8445 17.9555 9.06669 19.9111L8.88892 20.1778V26.9333C8.88892 27.7333 9.51114 28.4444 10.4 28.4444H21.7778C22.5778 28.4444 23.2889 27.7333 23.2889 26.9333V20.1778H23.2ZM21.4222 26.6667H10.6667V20.8C12.0889 19.3778 14.0445 18.6667 16.0889 18.6667C18.0445 18.5778 20 19.3778 21.4222 20.8V26.6667Z"
                            fill="white"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_1_1560">
                            <rect width="32" height="32" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <p class="mr-0 fs-6">{{ trans('cruds.hr_home.total_employees') }}</p>
            </div>

            <div class="card1-body d-flex justify-content-between align-items-center ">
                <div>
                    <p class="mb-0 fw-bold">{{ $totalEmployees }}</p>
                    <p class="mt-2 fw-bold">{{ trans('cruds.hr_home.employee') }}</p>
                </div>
                <div id="chart-circle-1"></div>
            </div>

        </div>
        <div class="card2 responsive-widget home-gradient with-border p-3 d-flex flex-column  ">
            <div class="card2-header d-flex justify-content-between align-items-center ">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16 26.6667C21.8911 26.6667 26.6667 21.891 26.6667 16C26.6667 10.109 21.8911 5.33334 16 5.33334C10.109 5.33334 5.33337 10.109 5.33337 16C5.33337 21.891 10.109 26.6667 16 26.6667Z"
                        stroke="white" stroke-width="2.66667"/>
                    <path
                        d="M6.66665 3.73868C5.45059 4.4408 4.44077 5.45062 3.73865 6.66668M25.3333 3.73868C26.5494 4.4408 27.5592 5.45062 28.2613 6.66668"
                        stroke="white" stroke-width="2.66667" stroke-linecap="round"/>
                    <path
                        d="M12 12H19.5173C19.6947 12 19.784 12.216 19.6587 12.3413L12.3413 19.6587C12.3134 19.6866 12.2944 19.7223 12.2867 19.761C12.279 19.7998 12.2829 19.84 12.2981 19.8765C12.3132 19.913 12.3388 19.9443 12.3716 19.9662C12.4045 19.9882 12.4431 20 12.4827 20H20"
                        stroke="white" stroke-width="2.66667" stroke-linecap="round"
                        stroke-linejoin="round"/>
                </svg>

                <p class="mb-0 fs-6">{{ trans('cruds.hr_home.absent') }}</p>
            </div>

            <div class="card2-body d-flex justify-content-between align-items-center ">
                <div>
                    <p class="mb-0 fw-bold">{{ $absentToday }}</p>
                    <p class="mt-2 fw-bold"><span class="text-danger">+3%</span> {{ trans('cruds.hr_home.increase_than_yesterday') }}
                    </p>
                </div>
                <div id="chart-circle-3"></div>
            </div>

        </div>
        <div class="card3 responsive-widget home-gradient with-border p-3 d-flex flex-column  ">
            <div class="card3-header d-flex justify-content-between align-items-center ">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M7.78624 0.248742C9.16405 -0.0640237 10.5925 -0.0812766 11.9775 0.19812C13.3624 0.477517 14.6725 1.04722 15.8213 1.86969C16.9701 2.69217 17.9315 3.74874 18.6423 4.96978C19.3531 6.19083 19.7971 7.54864 19.945 8.95374C19.971 9.20106 19.8977 9.44858 19.7413 9.64186C19.5848 9.83514 19.3579 9.95834 19.1106 9.98437C18.8633 10.0104 18.6158 9.93711 18.4225 9.78063C18.2292 9.62415 18.106 9.39731 18.08 9.14999C17.9193 7.62327 17.3294 6.17331 16.3785 4.96807C15.4277 3.76282 14.1549 2.85161 12.7075 2.33998C11.2601 1.82836 9.69738 1.73724 8.20034 2.07721C6.7033 2.41717 5.33321 3.17429 4.24876 4.26087C3.1643 5.34745 2.40987 6.71903 2.07285 8.21673C1.73582 9.71443 1.83 11.277 2.34446 12.7234C2.85893 14.1697 3.77263 15.4408 4.97974 16.3892C6.18685 17.3377 7.63796 17.9248 9.16499 18.0825C9.28835 18.094 9.40821 18.1298 9.51763 18.1879C9.62706 18.246 9.72388 18.3253 9.8025 18.421C9.88113 18.5168 9.93999 18.6271 9.97569 18.7458C10.0114 18.8644 10.0232 18.989 10.0105 19.1122C9.99779 19.2354 9.96077 19.3549 9.90159 19.4638C9.8424 19.5726 9.76223 19.6687 9.66571 19.7463C9.56919 19.824 9.45822 19.8818 9.33924 19.9163C9.22025 19.9508 9.0956 19.9614 8.97249 19.9475C6.61364 19.7048 4.41779 18.6317 2.77688 16.9199C1.13596 15.208 0.156782 12.9687 0.0141001 10.6017C-0.128581 8.2347 0.574525 5.894 1.99792 3.99742C3.42132 2.10083 5.47237 0.771785 7.78499 0.247492L7.78624 0.248742ZM9.99999 3.74999C10.2486 3.74999 10.4871 3.84876 10.6629 4.02458C10.8387 4.20039 10.9375 4.43885 10.9375 4.68749V11.25H5.93749C5.68885 11.25 5.4504 11.1512 5.27458 10.9754C5.09877 10.7996 4.99999 10.5611 4.99999 10.3125C4.99999 10.0639 5.09877 9.82539 5.27458 9.64958C5.4504 9.47376 5.68885 9.37499 5.93749 9.37499H9.06249V4.68749C9.06249 4.43885 9.16127 4.20039 9.33708 4.02458C9.5129 3.84876 9.75135 3.74999 9.99999 3.74999ZM12.775 12.775C12.9508 12.5994 13.1891 12.5008 13.4375 12.5008C13.6859 12.5008 13.9242 12.5994 14.1 12.775L16.25 14.925L18.4 12.775C18.4858 12.6829 18.5893 12.609 18.7043 12.5578C18.8193 12.5065 18.9435 12.479 19.0693 12.4768C19.1952 12.4745 19.3203 12.4977 19.437 12.5448C19.5537 12.592 19.6598 12.6622 19.7488 12.7512C19.8378 12.8402 19.908 12.9463 19.9551 13.063C20.0023 13.1797 20.0255 13.3048 20.0232 13.4306C20.021 13.5565 19.9935 13.6807 19.9422 13.7957C19.891 13.9107 19.8171 14.0142 19.725 14.1L17.575 16.25L19.725 18.4C19.8171 18.4858 19.891 18.5893 19.9422 18.7043C19.9935 18.8193 20.021 18.9435 20.0232 19.0693C20.0255 19.1952 20.0023 19.3203 19.9551 19.437C19.908 19.5537 19.8378 19.6598 19.7488 19.7488C19.6598 19.8378 19.5537 19.908 19.437 19.9551C19.3203 20.0023 19.1952 20.0255 19.0693 20.0232C18.9435 20.021 18.8193 19.9935 18.7043 19.9422C18.5893 19.891 18.4858 19.8171 18.4 19.725L16.25 17.575L14.1 19.725C14.0142 19.8171 13.9107 19.891 13.7957 19.9422C13.6807 19.9935 13.5565 20.021 13.4306 20.0232C13.3048 20.0255 13.1797 20.0023 13.063 19.9551C12.9463 19.908 12.8402 19.8378 12.7512 19.7488C12.6622 19.6598 12.592 19.5537 12.5448 19.437C12.4977 19.3203 12.4745 19.1952 12.4768 19.0693C12.479 18.9435 12.5065 18.8193 12.5578 18.7043C12.609 18.5893 12.6829 18.4858 12.775 18.4L14.925 16.25L12.775 14.1C12.5994 13.9242 12.5008 13.6859 12.5008 13.4375C12.5008 13.1891 12.5994 12.9508 12.775 12.775Z"
                          fill="white"/>
                </svg>
                <p class="mb-0 fs-6">{{ trans('cruds.hr_home.late_arrival') }}</p>
            </div>

            <div class="card3-body d-flex justify-content-between align-items-center ">
                <div>
                    <p class="mb-0 fw-bold">50</p>
                    <p class="mt-2 fw-bold"><span class="text-danger">+3%</span> {{ trans('cruds.hr_home.increase_than_yesterday') }}
                </div>
                <div id="chart-circle-4"></div>
            </div>

        </div>
        <div class="card4 responsive-widget home-gradient with-border p-3 d-flex flex-column  ">
            <div class="card4-header d-flex justify-content-between align-items-center ">
                <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M23.0713 10.5586H16.8213C16.7139 10.5586 16.626 10.6465 16.626 10.7539V11.9258C16.626 12.0332 16.7139 12.1211 16.8213 12.1211H23.0713C23.1787 12.1211 23.2666 12.0332 23.2666 11.9258V10.7539C23.2666 10.6465 23.1787 10.5586 23.0713 10.5586ZM19.7998 13.8789H16.8213C16.7139 13.8789 16.626 13.9668 16.626 14.0742V15.2461C16.626 15.3535 16.7139 15.4414 16.8213 15.4414H19.7998C19.9072 15.4414 19.9951 15.3535 19.9951 15.2461V14.0742C19.9951 13.9668 19.9072 13.8789 19.7998 13.8789ZM11.6528 8.37354H10.5957C10.4443 8.37354 10.3223 8.49561 10.3223 8.64697V14.7017C10.3223 14.7896 10.3638 14.8701 10.4346 14.9214L14.0698 17.5728C14.1919 17.6606 14.3628 17.6362 14.4507 17.5142L15.0781 16.6572V16.6548C15.166 16.5327 15.1392 16.3618 15.0171 16.2739L11.9238 14.0376V8.64697C11.9263 8.49561 11.8018 8.37354 11.6528 8.37354Z"
                        fill="white"/>
                    <path
                        d="M19.6485 16.9526H18.2373C18.1006 16.9526 17.9712 17.0234 17.898 17.1406C17.5879 17.6313 17.2266 18.0854 16.8115 18.5005C16.0962 19.2158 15.2637 19.7773 14.3384 20.168C13.3789 20.5732 12.3609 20.7783 11.3111 20.7783C10.2588 20.7783 9.24074 20.5732 8.28371 20.168C7.35841 19.7773 6.5259 19.2158 5.81056 18.5005C5.09523 17.7852 4.53371 16.9526 4.14308 16.0273C3.73781 15.0703 3.53273 14.0522 3.53273 13C3.53273 11.9478 3.73781 10.9321 4.14308 9.97265C4.53371 9.04736 5.09523 8.21484 5.81056 7.49951C6.5259 6.78418 7.35841 6.22265 8.28371 5.83203C9.24074 5.42675 10.2612 5.22168 11.3111 5.22168C12.3633 5.22168 13.3814 5.42675 14.3384 5.83203C15.2637 6.22265 16.0962 6.78418 16.8115 7.49951C17.2266 7.91455 17.5879 8.36865 17.898 8.85937C17.9712 8.97656 18.1006 9.04736 18.2373 9.04736H19.6485C19.8169 9.04736 19.9243 8.87158 19.8486 8.72265C18.2569 5.55615 15.0293 3.49804 11.4258 3.45654C6.14992 3.39062 1.76759 7.70947 1.75783 12.9805C1.74806 18.2612 6.02785 22.5459 11.3086 22.5459C14.9585 22.5459 18.2398 20.4805 19.8486 17.2773C19.9243 17.1284 19.8145 16.9526 19.6485 16.9526Z"
                        fill="white"/>
                </svg>
                <p class="mb-0 fs-6">{{ trans('cruds.hr_home.on_time') }}</p>
            </div>

            <div class="card4-body d-flex justify-content-between align-items-center ">
                <div>
                    <p class="mb-0 fw-bold">280</p>
                    <p class="mt-2 fw-bold">
                        <span class="text-success">-10%</span>
                        {{ trans('cruds.hr_home.less_than_yesterday') }}</p>
                </div>
                <div id="chart-circle-2"></div>
            </div>

        </div>
        <div class="card5 responsive-widget home-gradient with-border p-3 d-flex flex-column  ">
            <div class="card5-header d-flex justify-content-between align-items-center ">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.5625 1.75612V30.2439L22.4375 27.5816V4.41856L13.5625 1.75612ZM7.4375 3.43749V13.4375H8.5625V4.56249H12.4375V3.43749H7.4375ZM23.5613 3.43937L23.5625 3.58156V5.43749H24.5625V3.43749L23.5613 3.43937ZM23.5625 6.56249V7.56249H24.5625V6.56249H23.5625ZM23.5625 8.68749V23.4375H24.5625V8.68749H23.5625ZM6.27725 12.3579L2.63512 16L6.27725 19.6421V17.4375H12.2773V14.5625H6.27725V12.3579ZM15.25 14.5C15.6642 14.5 16 15.1716 16 16C16 16.8284 15.6642 17.5 15.25 17.5C14.8358 17.5 14.5 16.8284 14.5 16C14.5 15.1716 14.8358 14.5 15.25 14.5ZM7.4375 18.5625V28H8.5625V18.5625H7.4375ZM23.5625 24.5625V25.4375H24.5625V24.5625H23.5625ZM23.5625 26.5625V28H24.5625V26.5625H23.5625ZM2 29.4375V30.5625H12.4375V29.4375H2ZM20.1658 29.4375L16.4158 30.5625H30V29.4375H20.1658Z"
                        fill="white"/>
                </svg>
                <p class="mb-0 fs-6">{{ trans('cruds.hr_home.early_departures') }}</p>
            </div>

            <div class="card5-body d-flex justify-content-between align-items-center ">
                <div>
                    <p class="mb-0 fw-bold">627.20</p>
                    <p class="mt-2 fw-bold"><span class="text-danger">+3%</span> {{ trans('cruds.hr_home.increase_than_yesterday') }}
                    </p>
                </div>
                <div id="chart-circle-5"></div>
            </div>

        </div>
        <div class="card6 responsive-widget home-gradient with-border p-3 d-flex flex-column  ">
            <div class="card6-header d-flex justify-content-between align-items-center ">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1_1655)">
                        <path
                            d="M16.6699 8.89648C17.1777 9.13737 17.6367 9.4401 18.0469 9.80469C18.457 10.1693 18.8086 10.5827 19.1016 11.0449C19.3945 11.5072 19.6159 12.002 19.7656 12.5293C19.9154 13.0566 19.9935 13.6035 20 14.1699C20 14.9707 19.847 15.7259 19.541 16.4355C19.235 17.1452 18.8184 17.7637 18.291 18.291C17.7637 18.8184 17.1452 19.235 16.4355 19.541C15.7259 19.847 14.9707 20 14.1699 20C13.6035 20 13.0566 19.9219 12.5293 19.7656C12.002 19.6094 11.5104 19.388 11.0547 19.1016C10.599 18.8151 10.1855 18.4668 9.81445 18.0566C9.44336 17.6465 9.13737 17.1842 8.89648 16.6699H0V1.66992H3.33008V0H5V1.66992H11.6699V0H13.3301V1.66992H16.6699V8.89648ZM1.66992 5H15V3.33008H1.66992V5ZM8.38867 15C8.34961 14.7266 8.33008 14.4499 8.33008 14.1699C8.33008 13.3626 8.48307 12.6042 8.78906 11.8945C9.09505 11.1849 9.51172 10.5664 10.0391 10.0391C10.5664 9.51172 11.1849 9.09505 11.8945 8.78906C12.6042 8.48307 13.3626 8.33008 14.1699 8.33008C14.4499 8.33008 14.7266 8.34961 15 8.38867V6.66992H1.66992V15H8.38867ZM14.1699 18.3301C14.7428 18.3301 15.2799 18.2227 15.7812 18.0078C16.2826 17.793 16.7253 17.4935 17.1094 17.1094C17.4935 16.7253 17.7897 16.2858 17.998 15.791C18.2064 15.2962 18.3171 14.7559 18.3301 14.1699C18.3301 13.597 18.2227 13.0566 18.0078 12.5488C17.793 12.041 17.4967 11.5983 17.1191 11.2207C16.7415 10.8431 16.2988 10.5469 15.791 10.332C15.2832 10.1172 14.7428 10.0065 14.1699 10C13.5905 10 13.0501 10.1074 12.5488 10.3223C12.0475 10.5371 11.6048 10.8366 11.2207 11.2207C10.8366 11.6048 10.5404 12.0475 10.332 12.5488C10.1237 13.0501 10.013 13.5905 10 14.1699C10 14.7493 10.1074 15.2897 10.3223 15.791C10.5371 16.2923 10.8366 16.7318 11.2207 17.1094C11.6048 17.487 12.0475 17.7832 12.5488 17.998C13.0501 18.2129 13.5905 18.3236 14.1699 18.3301ZM15 13.3301H16.6699V15H13.3301V11.6699H15V13.3301Z"
                            fill="white"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_1_1655">
                            <rect width="20" height="20" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <p class="mb-0 fs-6">{{ trans('cruds.hr_home.time_off') }}</p>
            </div>

            <div class="card6-body d-flex justify-content-between align-items-center ">
                <div>
                    <p class="mb-0 fw-bold">{{ $onLeaveToday }}</p>
                    <p class="mt-2 fw-bold">2% {{ trans('cruds.hr_home.increase_than_yesterday') }}</p>
                </div>
                <div id="chart-circle-6"></div>
            </div>

        </div>

        <div class="attendance-comparison home-gradient with-border">

            <div class="d-flex justify-content-between align-items-center p-4">
                <h5 class="mb-0 fw-bold">{{ trans('cruds.hr_home.attendance_comparison_chart') }}</h5>
                <div class=" mr-5">
                    <div class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                           data-bs-toggle="dropdown">
                            <span class="material-icons-outlined fs-5">more_vert</span>
                            <span>{{ trans('cruds.hr_home.year') }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:;">2025</a></li>
                            <li><a class="dropdown-item" href="javascript:;">2026</a></li>
                            <li><a class="dropdown-item" href="javascript:;">2027</a></li>
                        </ul>
                    </div>

                </div>

            </div>
            <div id="chart4"></div>

        </div>
        <div class="most-absent home-gradient with-border">

            <div class="table-responsive">
                <table class="table table-borderless ">
                    @forelse($mostAbsentEmployees as $attendance)
                    <tr>
                        <td>
                            <img src="{{ $attendance->user->avatar_url ?? asset('/dashboard/assets/images/avatars/11.png') }}" width="30"
                                 alt="Avatar" class="rounded-circle">
                        </td>
                        <td>
                            <h5 class="mb-0">{{ $attendance->user->name ?? 'N/A' }}</h5>
                        </td>
                        <td>
                            <span class="text-danger">{{ $attendance->absent_count }} {{ trans('cruds.hr_home.absent_days') }}</span>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">{{ trans('global.no_entries_in_table') }}</td>
                    </tr>
                    @endforelse
                </table>
            </div>

        </div>
        <div class="hr-weekly-attendance">

            <div class="d-flex flex-column align-items-center justify-content-center" style="gap: 10px">
                <h4>{{ trans('cruds.hr_home.weekly_attendance') }}</h4>
                @forelse($weeklyAttendanceByDept as $dept)
                <div class="hr-weekly-attendance-card with-border d-flex justify-content-between align-items-center">
                    <span class="material-symbols-outlined">{{$dept['icon']}}</span>

                    <div class="">
                        <h5>{{ $dept['name'] }}</h5>
                        <p>{{now()->format('d F Y, H:i A')}}</p>
                    </div>
                    <h5>{{ $dept['percentage'] }}%</h5>
                </div>
                @empty
                <p>{{ trans('global.no_data_available') }}</p>
                @endforelse
            </div>
        </div>
    </div>
</div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function createRadialBarChart(elementId, seriesValue, color) {
                const chartEl = document.querySelector(elementId);
                if (!chartEl) return;

                var options = {
                    series: [seriesValue],
                    chart: {
                        type: 'radialBar',
                        height: 80,
                        width: 80,
                        sparkline: { enabled: true }
                    },
                    plotOptions: {
                        radialBar: {
                            hollow: { size: '60%' },
                            track: { background: 'rgba(0, 0, 0, 0.1)' },
                            dataLabels: {
                                name: { show: false },
                                value: {
                                    show: true,
                                    offsetY: 5,
                                    fontSize: '16px',
                                    fontWeight: '600',
                                    formatter: function (val) {
                                        return val + '%';
                                    }
                                }
                            }
                        }
                    },
                    colors: [color],
                    stroke: { lineCap: 'round' },
                };
                new ApexCharts(chartEl, options).render();
            }

            // Render DYNAMIC charts
            createRadialBarChart("#chart-circle-1", {{ $totalEmployeesPercentage }}, "#47ff33");
            createRadialBarChart("#chart-circle-2", {{ $onTimePercentage }}, "#47ff33");
            createRadialBarChart("#chart-circle-3", {{ $absentPercentage }}, "#ff0808");
            createRadialBarChart("#chart-circle-4", {{ $lateArrivalPercentage }}, "#1f35bd");
            createRadialBarChart("#chart-circle-5", {{ $earlyDeparturePercentage }}, "#ff0808");
            createRadialBarChart("#chart-circle-6", {{ $timeOffPercentage }}, "#ffc107");

            // Render Attendance Comparison Chart
            const chart4El = document.querySelector("#chart4");
            if (chart4El) {
                var options4 = {
                    series: [{
                        name: "Present",
                        data: @json($attendanceComparison['present'] ?? [])
                    }],
                    chart: {
                        foreColor: "#9ba7b2",
                        height: 170,
                        type: 'bar',
                        toolbar: { show: false },
                        sparkline: { enabled: false },
                        zoom: { enabled: false }
                    },
                    dataLabels: { enabled: false },
                    stroke: {
                        width: 4,
                        curve: 'smooth',
                        colors: ['transparent']
                    },
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shade: 'dark',
                            gradientToColors: ['#6FF25A', '#396FFD'],
                            shadeIntensity: 1,
                            type: 'vertical',
                            opacityTo: 0.1,
                            stops: [0, 100, 100, 100]
                        },
                    },
                    colors: ['#6FF25A'],
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            borderRadius: 4,
                            borderRadiusApplication: 'around',
                            borderRadiusWhenStacked: 'last',
                            columnWidth: '55%',
                        }
                    },
                    grid: {
                        show: false,
                        borderColor: 'rgba(0, 0, 0, 0.15)',
                        strokeDashArray: 4,
                    },
                    tooltip: {
                        theme: "dark",
                        fixed: { enabled: true },
                        x: { show: true },
                        y: {
                            title: {
                                formatter: function (e) {
                                    return ""
                                }
                            }
                        },
                        marker: { show: false }
                    },
                    xaxis: {
                        categories: @json($attendanceComparison['labels'] ?? []),
                    }
                };
                new ApexCharts(chart4El, options4).render();
            }
        });
    </script>