<div class="header-wrapper sm-padding bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-9">
                    <h2>Artikel : {{$news->title}}</h2>
                </div>
                <div class="col-md-3">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">{{$news->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>