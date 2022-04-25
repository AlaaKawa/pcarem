@extends('layouts.master')

@section('title')
{{ __('sentence.Edit diseas') }}
@endsection

@section('content')
<div class="row justify-content-center">
   <div class="col-md-8">
      <div class="card shadow mb-4">
         <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ __('sentence.Edit diseas') }}</h6>
         </div>
         <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
            @endif
            @if (session('success'))
            <div class="alert alert-success">
               {{ session('success') }}
            </div>
            @endif
            <form method="post" action="{{ route('illness.store_edit') }}">
               <div class="form-group">
                  <label for="exampleInputEmail1">Diseas Name *</label>
                  <input type="text" class="form-control" name="name_illness" id="IllnessName" aria-describedby="IllnessName" value="{{ $illness->name_illness }}">
                  {{ csrf_field() }}
               </div>
               <div class="form-group">
                  <label for="exampleInputPassword1">Diseas abriviation *</label>
                  <input type="text" class="form-control" name="illness_abriviation" id="IllnessAbriviation" value="{{ $illness->illness_abriviation }}">
                  <input type="hidden" name="illness_id" value="{{ $illness->id }}">
               </div>
               <button type="submit" class="btn btn-primary">{{ __('sentence.Save') }}</button>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection