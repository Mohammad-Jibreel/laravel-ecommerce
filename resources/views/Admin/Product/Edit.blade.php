@extends('Admin.layout')
@section('content')

<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Edit  Prdouct</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="post" asp-action="Edit" asp-controller="Prdouct" asp-area="Admin">
                            <input type="hidden" name="Id" value="@Model.Id" />

                            <div class="mb-3">
                                <label asp-for="Id" class="form-label"></label>
                                <input asp-for="Id" disabled class="form-control" id="Id" aria-describedby="Id">
                                <div id="Id"  class="form-text text-danger"></div>
                            </div>
                            <div class="mb-3">
                                <label asp-for="Name" class="form-label"></label>
                                <input asp-for="Name" class="form-control" id="Name" aria-describedby="Name">
                                <span asp-validation-for="Name" class="text-danger"></span>

                            </div>
                            <div class="mb-3">
                                <label asp-for="Description" class="form-label"></label>
                                <input asp-for="Description" asp-validation-for="Description" class="form-control" id="Description">
                                <span asp-validation-for="Description" class="text-danger"></span>

                            </div>

                            <div class="mb-3">
                                <label asp-for="Price" class="form-label"></label>
                                <input asp-for="Price" asp-validation-for="Price" class="form-control" id="Price">
                                <span asp-validation-for="Price" class="text-danger"></span>

                            </div>

                            <div class="mb-3">
                                <label asp-for="SubCategory.Name" class="form-label"></label>
                                <input asp-for="SubCategory.Name" asp-validation-for="SubCategory.Name" class="form-control" id="SubCategory.Name">
                                <span asp-validation-for="SubCategory.Name" class="text-danger"></span>

                            </div>

                            <div class="mb-3">
                                <label asp-for="Color.value" class="form-label"></label>
                                <input asp-for="Color.value" asp-validation-for="Color.value" class="form-control" id="Color.value">
                                <span asp-validation-for="Color.value" class="text-danger"></span>

                            </div>
                            <div class="mb-3">
                                <label asp-for="Size.value" class="form-label"></label>
                                <input asp-for="Size.value" asp-validation-for="Size.value" class="form-control" id="Size.value">
                                <span asp-validation-for="Size.value" class="text-danger"></span>

                            </div>



                            <a asp-action="Index" asp-controller="Prdouct" asp-area="Admin" class="btn btn-success">Back</a>
                            <button type="submit" class="btn btn-primary">Update</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
