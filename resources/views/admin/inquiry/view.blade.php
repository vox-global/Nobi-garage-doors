@extends('layouts.admin.app')
@section('page_header')
    All Inquiries
@endsection
@section('content')
    <div class="container my-3">
        <div class="card p-3">
            <div class="row">
                <div class="col-md-12">

                    <form method="post">
                        @csrf
                        <table id="yajra" class="table table-bordered table-hover data-tables" style="width:100%;">
                            <thead>
                                <tr>
                                    <th width=" 10px">#</th>
                                    <th class="">Name</th>
                                    <th class="">Email</th>
                                    <th class="">Address</th>
                                    {{-- <th width="150px">Action</th> --}}
                                </tr>
                            </thead>
                            <tbody class="">

                            </tbody>
                        </table>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        search_start();
        $('#search_status').change(function() {
            search_start();
        })

        function search_start() {
            if ($.fn.DataTable.isDataTable("#yajra")) $("#yajra").DataTable().destroy();
            //Start getting filters

            let status = $('#search_status').val();

            $('#yajra').DataTable({
                "scrollX": true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('inquiry-fetch') }}",
                    type: "GET",
                    data: {
                        filter: "{{ app('request')->input('q') }}",
                        status
                    }
                },
                createdRow: function(row, data, dataIndex) {},
                columns: [{
                    data: 'id',
                    render: function(data, type, row, index) {
                        return index.row + 1;
                    }
                }, {
                    data: 'name'
                }, {
                    data: 'email'
                }, {
                    data: 'address'
                }, ],
                "drawCallback": function(settings) {}
            });
        }


        $('#yajra_filter').children().children().val("{{ app('request')->input('search') }}")
        $('#yajra_filter').children().children().trigger("keyup");

        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).data('text')).select();
            document.execCommand("copy");
            $temp.remove();
        }
    </script>
@endpush

{{-- <a class="btn-warning btn-sm my-2 btn cursor-pointer" title="Copy to Clipboard"
onclick="copyToClipboard(this)" data-text="${slugs}"> <i
    class="icon-clipboard"></i>
</a> --}}
