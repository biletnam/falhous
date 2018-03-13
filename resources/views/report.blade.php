@extends('main')
@section('content')

    <!-- <embed src="js/example.pdf" width="800px" height="500px" -->


    @foreach($tasks as $task)
        <div class="container" id="Usage" style="text-align: center;">

            <div class="well well-sm" style="font-size: 20px;background-color:lightgreen; ">{{$task->date}} <br> {{$task->name}}</div>

            @if($task->desc != "Blank")
                <div class="well well-lg">{{$task->desc}}</div>
            @endif

            <table class="table table-bordered">

                <thead>
                    <tr>
                        <th style="text-align: center">الحضور</th>
                        <th style="text-align: center">الغياب</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>

                        <td>
                            @for($i=0; $i < count($attend); $i++)
                                @if($attend[$i]->task_id == $task->id)
                                    {{$attend[$i]->name}}<br>
                                @endif
                            @endfor
                        </td>

                        <td>
                            @for($i = 0; $i < count($absent); $i++)
                                @if($absent[$i]->task_id == $task->id)
                                    {{$absent[$i]->name}}<br>
                                @endif
                            @endfor
                        </td>

                    </tr>

                </tbody>
            </table>

            @if($task->notes != "Blank")
                <div class="alert alert-info">
                    <strong style="text-align: right">ملاحظات</strong><br>
                    {{$task->notes}}
                </div>
            @endif

            <hr>
        </div>
        <br><br>
    @endforeach
    

@endsection