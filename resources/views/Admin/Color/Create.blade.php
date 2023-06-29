@extends('Admin.layout.layout')
@section('content')

<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Create  Color</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="post" asp-action="Create">
                            <div class="mb-3">
                                <label asp-for="Name" class="form-label"></label>
                                <input  asp-for=Name class="form-control" id="Name" aria-describedby="Name">
                                <span asp-validation-for="Name" class="text-danger"></span>

                            </div>
                            <div class="mb-3">
                                <label asp-for="value" class="form-label"></label>
                                <input asp-for="value" class="form-control" id="value">
                                <span asp-validation-for="value" class="text-danger"></span>

                            </div>

                            <a asp-action="Index"  asp-asp-controller="Color" asp-area="Admin" class="btn btn-success">Back</a>
                            <button type="submit" class="btn btn-primary">submit</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection
