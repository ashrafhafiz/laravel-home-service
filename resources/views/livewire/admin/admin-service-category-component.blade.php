<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Service Categories</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Service Categories</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row portfolioContainer">
                        <div class="col-md-12 profile1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3>All Service Categories</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('admin.servicecategory.add') }}" class="btn btn-info pull-right">Add New</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                    @endif
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($serviceCategories as $key => $serviceCategory)
                                            <tr>
                                                <th>{{ $serviceCategory->id }}</th>
                                                <th><img src="{{ asset('images/categories/' . $serviceCategory->image ) }}"
                                                        alt="{{ $serviceCategory->name }}"></th>
                                                <th>{{ $serviceCategory->name }}</th>
                                                <th>{{ $serviceCategory->slug }}</th>
                                                <th>
                                                    <a href="{{ route('admin.servicecategory.edit', ['categoryId' => $serviceCategory->id]) }}" style="margin-right: 10px;"><i class="fa fa-edit fa-2x text-info"></i></a>
                                                    <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{ $serviceCategory->id }})"><i class="fa fa-trash fa-2x text-danger"></i></a>
                                                </th>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {!! $serviceCategories->links() !!}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>