@extends('backend.master')
@section('page-content')
    <main class="page-content">
        <form action="">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">eCommerce</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Settings</button>
                        <button type="button"
                            class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                            <a class="dropdown-item" href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated
                                link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4">
                                    <h5 class="mb-3">Product Title</h5>
                                    <input type="text" class="form-control" placeholder="write title here...."
                                        name="name">
                                </div>
                                <div class="mb-4">
                                    <h5 class="mb-3">Price</h5>
                                    <input type="text" class="form-control" placeholder="write price here...."
                                        name="price">
                                </div>
                                <div class="mb-4">
                                    <h5 class="mb-3">Product Description</h5>
                                    <textarea class="form-control" cols="4" rows="6" placeholder="write a description here.."
                                        name="description"></textarea>
                                </div>
                                <div class="mb-4">
                                    <h5 class="mb-3">Display images</h5>
                                    <input id="fancy-file-upload" type="file" name="files"
                                        accept=".jpg, .png, image/jpeg, image/png" multiple>
                                </div>
                                <div class="mb-4">
                                    <h5 class="mb-3">Collection</h5>
                                    <input type="radio" name="coll" value="instock">
                                    <label>Instock</label>

                                    <input type="radio" name="coll" value="out_of_stock">
                                    <label>Out of Stock</label>
                                </div>
                                <div class="mb-4">

                                    <h5 class="mb-3">Organize</h5>
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="AddCategory" class="form-label fw-bold">Category</label>
                                            <select class="form-select" id="AddCategory">
                                                <option value="0">Select Category</option>
                                                @foreach ($items as $item)
                                                    <option value="{{ $item->id }}">{{ $item->cat_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12 col-lg-4">


                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="submit" class="btn btn-primary px-4">Publish</button>


                                            </div>
                                        </div><!--end row-->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div><!--end row-->
            </form>
    </main>
@endsection
