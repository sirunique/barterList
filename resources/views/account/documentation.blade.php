@extends('layouts.user.slave')

@section('title')
    Account | Documentation
@endsection

@section('pagename')
    Documentation
@endsection

@section('content')
<div class="col-lg-12">
    @foreach ($userDoc as $document)
        <div class="panel-group" id="accordion" role="tablist"
            aria-multiselectable="true">
            <div class="panel panel-default bx-shadow-none">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse"
                        data-parent="#accordion" href="#{{ $document->id }}"
                        aria-expanded="{{ $document->id == 2 ? "false": "true" }}" aria-controls="{{ $document->id }}">
                            {{ $document->title }}
                        </a>
                    </h4>
                </div>
                <div id="{{ $document->id }}" class="panel-collapse collapse"
                    role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body text-justify">
                        {{$document->description}}
                    </div>
                </div>        
        {{-- </div> --}}
        </div>
    @endforeach
        {{-- <div class="panel panel-default bx-shadow-none">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse"
                       data-parent="#accordion" href="#collapseTwo"
                       aria-expanded="false" aria-controls="collapseTwo">
                        My Catalog
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse"
                 role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                    accusamus terry richardson ad squid. 3 wolf moon officia
                    aute, non cupidatat skateboard dolor brunch. Food truck
                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                    sunt aliqua put a bird on it squid single-origin coffee
                    nulla assumenda shoreditch et. Nihil anim keffiyeh
                    helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                    Leggings occaecat craft beer farm-to-table, raw denim
                    aesthetic synth nesciunt you probably haven't heard of them
                    accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
        <div class="panel panel-default bx-shadow-none">
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse"
                       data-parent="#accordion" href="#collapseThree"
                       aria-expanded="false" aria-controls="collapseThree">
                        Transactions
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse"
                 role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                    accusamus terry richardson ad squid. 3 wolf moon officia
                    aute, non cupidatat skateboard dolor brunch. Food truck
                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                    sunt aliqua put a bird on it squid single-origin coffee
                    nulla assumenda shoreditch et. Nihil anim keffiyeh
                    helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                    Leggings occaecat craft beer farm-to-table, raw denim
                    aesthetic synth nesciunt you probably haven't heard of them
                    accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
        <div class="panel panel-default bx-shadow-none">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse"
                       data-parent="#accordion" href="#collapseTwo"
                       aria-expanded="false" aria-controls="collapseTwo">
                        My Catalog
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse"
                 role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                    accusamus terry richardson ad squid. 3 wolf moon officia
                    aute, non cupidatat skateboard dolor brunch. Food truck
                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                    sunt aliqua put a bird on it squid single-origin coffee
                    nulla assumenda shoreditch et. Nihil anim keffiyeh
                    helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                    Leggings occaecat craft beer farm-to-table, raw denim
                    aesthetic synth nesciunt you probably haven't heard of them
                    accusamus labore sustainable VHS.
                </div>
            </div>
        </div>

        <div class="panel panel-default bx-shadow-none">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse"
                       data-parent="#accordion" href="#collapseTwo"
                       aria-expanded="false" aria-controls="collapseTwo">
                        My Catalog
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse"
                 role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                    accusamus terry richardson ad squid. 3 wolf moon officia
                    aute, non cupidatat skateboard dolor brunch. Food truck
                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                    sunt aliqua put a bird on it squid single-origin coffee
                    nulla assumenda shoreditch et. Nihil anim keffiyeh
                    helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                    Leggings occaecat craft beer farm-to-table, raw denim
                    aesthetic synth nesciunt you probably haven't heard of them
                    accusamus labore sustainable VHS.
                </div>
            </div>
        </div> --}}






</div>
    </div>
</div><!-- end col -->

@endsection