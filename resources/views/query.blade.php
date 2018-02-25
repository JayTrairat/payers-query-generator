@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Qeury Generator</div>

                <div class="card-body">
                    <form class="" action="{{ route('generate-sql') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row col-12">
                            <div class="col col-6">
                                <label for="name" class="col-2 col-form-label text-left">ชื่อ</label>
                                <input type="text" class="col-10 form-control" name='name' value="{{ $name }}" placeholder="กรอกข้อมูลชื่อ">
                            </div>
                            <div class="col col-6">
                                <label for="moo" class="col-2 col-form-label text-left">หมู่</label>
                                <input type="text" class="col-10 form-control" name='moo' value="{{ $moo }}" placeholder="กรอกข้อมูลหมู่">
                            </div>
                        </div>
                        <div class="form-check form-check-inline">
                            <span class='col-form-label'>
                                &nbsp;&nbsp;&nbsp; กรองโดยเลือกตาม &nbsp;
                            </span>
                            <span class=''>
                                <input class="form-check-input" name='flag_building' type="checkbox" value="true" id="defaultCheck1"
                                    @if($flag_building)
                                        checked='checked'
                                    @endif
                                >
                                <label class="form-check-label" for="defaultCheck1" >
                                    building  &nbsp;
                                </label>

                                <input class="form-check-input" name='flag_billboard' type="checkbox" value="true" id="defaultCheck2"
                                    @if($flag_billboard)
                                        checked='checked'
                                    @endif
                                >
                                <label class="form-check-label" for="defaultCheck2">
                                    billboard  &nbsp;
                                </label>

                                <input class="form-check-input" name='flag_land' type="checkbox" value="true" id="defaultCheck3"
                                    @if($flag_land)
                                        checked='checked'
                                    @endif
                                >
                                <label class="form-check-label" for="defaultCheck3">
                                    land  &nbsp;
                                </label>

                                <input class="form-check-input" name='flag_two_houses' type="checkbox" value="true" id="defaultCheck4"
                                    @if($flag_two_houses)
                                        checked='checked'
                                    @endif
                                >
                                <label class="form-check-label" for="defaultCheck4">
                                    two house  &nbsp;
                                </label>
                            </span>
                        </div>
                        <div class="form-group col-12 text-left">
                            <label for="exampleTextarea">SQL Command</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3" readonly>{{ $sql }}</textarea>
                        </div>
                        <div class="form-group col-12">
                            <button type="submit" name="button" class='btn btn-info'>ค้นหา</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
