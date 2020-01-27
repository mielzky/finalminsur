
                @foreach ($deptsur->surveys as $survey)
                        <?php $pos=1 ?>
                        @foreach ($survey->answers as $answer)
                                <div>{{ $answer->answer }}</div>
                                @if ( $survey->responses->count() )
                            <div>{{ ($answer->responses->count() * 100) / $survey->responses->count() }}%</div> 
                                @endif
                        @endforeach
                @endforeach

