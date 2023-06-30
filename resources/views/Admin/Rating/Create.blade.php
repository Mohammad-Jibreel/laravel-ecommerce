﻿@extends('Admin.layout')
@section('content')

<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Create  Rating</h5>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="Name" class="form-label">Rating Name</label>
                                <input type="text" class="form-control" id="Name" aria-describedby="Name">
                                <div id="Name" class="form-text text-danger">This filed is mandatory</div>
                            </div>
                            <div class="mb-3">
                                <label for="subRating" class="form-label">Sub Rating</label>
                                <input type="text" class="form-control" id="subRating">
                            </div>

                            <a asp-action="Index" asp-asp-controller="Rating" asp-area="Admin" class="btn btn-success">Back</a>
                            <a asp-action="Create" asp-asp-controller="Rating" asp-area="Admin" class="btn btn-primary">submit</a>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
