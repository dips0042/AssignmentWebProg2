@section('coursePerDay')
    <section class="block py-6 custom-font" style="font-size: large; margin-top: 50px;">
        <div class="has-text-justified">
        <p class ="has-text-centered"><b>Course Distribution Per Day</b></p>
        <p class ="has-text-centered pb-5">Binusian2024 - Computer Science and Statistics</p>

        <div class="columns is-justify-content-center">
        <table class="table is-hoverable">
        <tbody>
            <tr>
                <td><b>Day</b></td>
                <td><b>Course Name</b></td>
            </tr>

            @php($day = array())
            @php(array_push($day, "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"))

            @php($monCourse = array())
            @php(array_push($monCourse, "Text Mining"))
            @php($tueCourse = array())
            @php(array_push($tueCourse, "Software Engineering"))
            @php($wedCourse = array())
            @php(array_push($wedCourse, "Web Programming", "Time Series Analysis"))
            @php($thuCourse = array())
            @php(array_push($thuCourse, "Big Data Infrastucture and Technology", "Operating Systems", "Multivariate Statistics"))
            @php($friCourse = array())
            @php(array_push($friCourse, "-"))
            @php($satCourse = array())
            @php(array_push($satCourse, "Stochastic Process"))

            @foreach ($day as $dayKey => $dayName)
                @switch($dayName) 
                    @case('Monday')
                        <tr>
                        <td>{{ $dayName }}</td>
                        <td>
                            @php($num = count($monCourse))
                            @foreach ($monCourse as $monKey => $monCourseValue)
                                {{ $monCourseValue }}
                                @if ($monKey != ($num-1))
                                    <br>
                                @endif
                            @endforeach
                        </td>
                        </tr>
                        @break
                    
                    @case('Tuesday')
                        <tr>
                        <td>{{ $dayName }}</td>
                        <td>
                            @php($num = count($tueCourse))
                            @foreach ($tueCourse as $tueKey => $tueCourseValue)
                                {{ $tueCourseValue }}
                                @if ($tueKey != ($num-1))
                                    <br>
                                @endif
                            @endforeach
                        </td>
                        </tr>
                        @break
                    
                    @case('Wednesday')
                        <tr>
                        <td>{{ $dayName }}</td>
                        <td>
                            @php($num = count($wedCourse))
                            @foreach ($wedCourse as $wedKey => $wedCourseValue)
                                {{ $wedCourseValue }}
                                @if ($wedKey != ($num-1))
                                    <br>
                                @endif
                            @endforeach
                        </td>
                        </tr>
                        @break

                    @case('Thursday')
                        <tr>
                        <td>{{ $dayName }}</td>
                        <td>
                            @php($num = count($thuCourse))
                            @foreach ($thuCourse as $thuKey => $thuCourseValue)
                                {{ $thuCourseValue }}
                                @if ($thuKey != ($num-1))
                                    <br>
                                @endif
                            @endforeach
                        </td>
                        </tr>
                        @break

                    @case('Friday')
                        <tr>
                        <td>{{ $dayName }}</td>
                        <td>
                            @php($num = count($friCourse))
                            @foreach ($friCourse as $friKey => $friCourseValue)
                                {{ $friCourseValue }}
                                @if ($friKey != ($num-1))
                                    <br>
                                @endif
                            @endforeach
                        </td>
                        </tr>
                        @break
                    
                    @case('Saturday')
                        <tr>
                        <td>{{ $dayName }}</td>
                        <td>
                            @php($num = count($satCourse))
                            @foreach ($satCourse as $satKey => $satCourseValue)
                                {{ $satCourseValue }}
                                @if ($satKey != ($num-1))
                                    <br>
                                @endif
                            @endforeach
                        </td>
                        </tr>
                        @break
                @endswitch
            @endforeach
        </tbody>
        </table>
        </div>
        </div>
    </section>
@endsection