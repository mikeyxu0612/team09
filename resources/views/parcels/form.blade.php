<div class="form-group">
    {!! Form::label('sign','簽收與否:') !!}
    {!! Form::text('sign',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Sign_proof','簽收憑證:') !!}
    {!! Form::text('Sign_proof',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('sign_date','管理員簽收时间:') !!}
    {!! Form::date('sign_date',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('sign_time','簽收时间:') !!}
    {!! Form::date('sign_time',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone','电话:') !!}
    {!! Form::text('phone',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('A_ID','簽收人住址(外部鍵):') !!}
    {!! Form::text('A_ID',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Image','上傳照片') !!}
    {!! Form::file('Image',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($SubmitButtonText,['class'=>'btn btn-primary form-control']) !!}
</div>
