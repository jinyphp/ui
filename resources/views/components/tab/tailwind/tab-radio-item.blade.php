<input type="radio" name="__tabbar" id="{{$id}}" {{$selected}}/>
<div class="tab-header">
    <label for="{{$id}}">
        {{$title}}
    </label>
</div>
<div class="tab-content">
    {{$slot}}
</div>
