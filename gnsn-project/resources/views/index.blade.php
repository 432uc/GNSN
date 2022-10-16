<link rel="stylesheet" href="/css/style.css" >
<select class = "selectPrayers" id = "NormalPrayers_id">  
  @foreach($NormalPrayers as $NormalPrayer)
    <option value="{{ $NormalPrayer->id }}">{{ $NormalPrayer->name }}</option>
  @endforeach
</select>