@extends('Admin.layout')
@section('content')

<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Edit  Category</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="post" asp-action="Edit" asp-controller="Category" asp-area="Admin">
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


                            <a asp-action="Index" asp-controller="Category" asp-area="Admin" class="btn btn-success">Back</a>
                            <button type="submit" class="btn btn-primary">Update</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
