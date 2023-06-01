@extends('admin.template.dashboard')

@section('custom-css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('content')
<div class="container text-white">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="text-white">Recruitment Setting</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th class="text-white">Recruitment Team</th>
                        <th class="text-white text-end">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teams as $team)
                        @if($team->name != 'JAGAT')
                        <tr>
                            <td>
                                <h4 class="text-white mb-0">
                                    Recruitment {{ $team->name }}
                                    @if($team->subdivisi != NULL)
                                        - {{ $team->subdivisi }}
                                    @endif
                                </h4>
                            </td>
                            <td class="text-end align-middle">
                                <div class="form-check form-switch d-flex justify-content-end">
                                    <input
                                        data-id="{{ $team->id }}"
                                        class="toggle-class form-check-input"
                                        type="checkbox"
                                        data-onstyle="success"
                                        data-offstyle="danger"
                                        data-toggle="toggle"
                                        data-on="On"
                                        data-off="Off"
                                        {{ $team->status ? 'checked' : '' }}
                                    >
                                </div>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('custom-js')
<script>
    $(function(){
        $(".toggle-class").change(function(){
            var status = ($(this).prop('checked') == true) ? 1 : 0;
            var team_id = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "/admin/change-status",
                data: {'status': status, 'team_id': team_id},
                success: function(data){
                    console.log('success');
                }
            });
        });
    });
</script>
@endsection
