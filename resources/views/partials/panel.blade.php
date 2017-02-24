<article>

    <div class="panel panel-default">
        <div class="panel-heading">
            Panel header
            {{ $header }}
        </div>
        <div class="panel-body">
            Panel message
            <p>
                {{$body }}
            </p>
            <p>   {{$slot}} </p>
        </div>
    </div>



    </div>
</article>