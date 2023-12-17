@props([
    'title' => '',
    'current' => '',
    'breadcrumbs' => [
        [
            'title' => 'Dashboard',
            'link' => '#',
            'icon' => 'tabler-gauge',
        ],
        [
            'title' => 'Default',
            'link' => '#',
            'icon' => 'tabler-chevron-right',
        ],
    ],

])

<div id="kt_app_toolbar" {{ $attributes->class(['app-toolbar']) }}>
    <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100 align-items-start">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column gap-1 me-3 mb-10">
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-6">
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                    <a href="{{ route('home') }}" class="text-gray-500 fs-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-gauge"
                             width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                             fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"/>
                            <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"/>
                            <path d="M13.41 10.59l2.59 -2.59"/>
                            <path d="M7 12a5 5 0 0 1 5 -5"/>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <!--end::Item-->
                <!--end::Item-->
                <!--begin::Item-->
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="icon icon-tabler icon-tabler-chevron-right" width="24"
                         height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 6l6 6l-6 6"/>
                    </svg>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-700">
                    {{ $current }}
                </li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
            <!--begin::Title-->
            <h1 class="page-heading mt-4 d-flex flex-column justify-content-center text-dark fw-bolder  lh-0">
                {{ $title }}
            </h1>
            <!--end::Title-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->

        <div class="d-flex align-items-center py-1">
            {!! $actions !!}
        </div>

        <!--end::Actions-->
    </div>
</div>
