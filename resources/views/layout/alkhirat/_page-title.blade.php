@php
    $breadcrumb = bootstrap()->getBreadcrumb();
@endphp

<!--begin::Page title-->
<div class="page-title d-flex flex-column me-5">
    <!--begin::Title-->
    <h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">
        {{ theme()->getOption('page', 'title') }}
    </h1>
    <!--end::Title-->



    @if ( !empty($breadcrumb) )
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
            @foreach ($breadcrumb as $item)
                <!--begin::Item-->
                @if ( $item['active'] === true )
                    <li class="breadcrumb-item text-dark">
                        {{ $item['title'] }}
                    </li>

                @else

                        @if ( ! empty($item['path']) )
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ theme()->getPageUrl($item['path']) }}" class="text-muted text-hover-primary">
                                {{ $item['title'] }}
                            </a>
                            </li>
                            <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                        @endif

                @endif
                <!--end::Item-->
                @if (next($breadcrumb))
                    <!--begin::Item-->

                    <!--end::Item-->
                @endif
            @endforeach
        </ul>
        <!--end::Breadcrumb-->
    @else
        <!--begin::Home Page Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
            <li class="breadcrumb-item text-dark">
                الرئيسية
            </li>
        </ul>
        <!--end::Home Page Breadcrumb-->
    @endif
</div>
<!--end::Page title-->
