@extends('Admin.layout.layout')
@section('content')

<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Delete  Color</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="post" asp-action="Delete" asp-asp-controller="Color"  asp-area="Admin">
                            <input type="hidden" name="Id" value="@Model.Id" />

                            <div class="mb-3">
                                <label for="Id" class="form-label"> </label>
                                <input asp-for="Id" asp-for="Id" disabled class="form-control" id="Id" aria-describedby="Id">
                                <div id="Id" class="form-text text-danger"></div>
                            </div>
                            <div class="mb-3">
                                <label asp-for="Name" class="form-label"></label>
                                <input asp-for="Name" disabled class="form-control" id="Name">
                            </div>
                            <div class="mb-3">
                                <label asp-for="value" class="form-label"></label>
                                <input  asp-for="value" disabled class="form-control" id="value" aria-describedby="Name">
                                <div id="value" class="form-text text-danger"></div>
                            </div>
                            <a asp-action="Index" asp-asp-controller="Color" asp-area="Admin" class="btn btn-success">Back</a>
                            <button type="submit" class="btn btn-primary" asp-route-id="Id">Delete</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
