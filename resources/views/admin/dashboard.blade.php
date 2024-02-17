@extends('layouts.admin.app')
@section('page_header')
    Dashboard
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row my-3">
            {{-- <div class="card p-3 col-md-12 mb-4 mx-3">
            <div class="box-header with-border">
                <h5 class="ml-3">Filter <span class="icon icon-filter"></span></h5>
                <form>
                    <div class="d-flex justify-content-start">

                        <div class="col-md-4 mb-3">
                            <label for="start_date">Start Date</label>
                            <input type="date" id="start_date" name="start_date" value="{{$start_date}}" class="form-control">
                            <div class="text-danger start_date_error" style="display: none">Start Date Cannot be greater than End Date</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="end_date">End Date</label>
                            <input type="date" id="end_date" name="end_date" value="{{$end_date}}" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="search_language">Actions:</label>
                            <br>
                            <button value="fetch" name="action" class="btn-success btn-sm btn mb-2 cursor-pointer">
                                <i class="icon-search4"></i>
                                Fetch Results
                            </button>
                            <a href="{{route('admin.home')}}" class="btn-warning btn-sm btn mb-2 cursor-pointer">
                                &times;
                                Clear
                            </a>
                        </div> --}}



        </div>
        </form>
    </div>
    </div>

    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

            $('#start_date').change(function() {
                validateDate();
            })
            $('#end_date').change(function() {
                validateDate();
            })
            window.validateDate = function() {
                var start_date = new Date($('#start_date').val());
                var end_date = new Date($('#end_date').val());

                if (start_date > end_date) {
                    $('.start_date_error').show()
                } else {
                    $('.start_date_error').hide()
                }
            }

        })
    </script>
@endpush
