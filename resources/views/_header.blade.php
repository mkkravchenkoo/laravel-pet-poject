<!-- Topbar Start -->
<div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>{{$globalConfig['address'] ?? ''}}</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="far fa-clock text-primary me-2"></small>
                <small>{{$globalConfig['working-time'] ?? ''}}</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>{{$globalConfig['phone'] ?? ''}}</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href="{{$globalConfig['fb-link'] ?? ''}}"
                   target="_blank"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>CarServ</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            @foreach($mainMenu as $item)
                @php
                    $parent = $item->parent ?? '';
                    $link = $item->link ?? '';
                    $text = $item->text ?? '';
                    $id = $item->id ?? '';

                    $children = array_filter($mainMenu, function($item)use($id){
                        $parentNested = $item->parent ?? '';
                        return $parentNested && $parentNested === $id;
                    });

                    $hasDropdown = !empty($children) && !$parent;
                    $isFirstLevel = !$parent;
                @endphp

                @if($isFirstLevel)
                    @if($hasDropdown)
                        <div class="nav-item dropdown">
                            <a href="{{$link}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{$text}}</a>
                            <div class="dropdown-menu fade-up m-0">
                                @foreach($children as $child)
                                    @php
                                        $childLink = $child->link ?? '';
                                        $childText = $child->text ?? '';
                                    @endphp
                                    <a href="{{$childLink}}" class="dropdown-item">{{$childText}}</a>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <a href="{{$link}}" class="nav-item nav-link active">{{$text}}</a>
                    @endif
                @endif
            @endforeach
        </div>
    </div>
</nav>
<!-- Navbar End -->
