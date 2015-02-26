@extends('licennses.layouts.main')

@section('content')

<div class="container" style="text-decoration-color: black; height:450px; width:100%;">


{{ Form::model($licennse, ['route' => ['licennses.update', $licennse->id], 'method' => 'put' , 'id' => 'pform'])}}


<input type="hidden" name="_token" value="{{ csrf_token() }}" />
<table class="table" style="max-width:90%; alignment-adjust: central; border-style: inset;
       border-width: 4px; border-color: darkgrey; margin-top: 2%; margin-left: 5%;">
       
           <tbody>               
      <tr>
            <td> 
                <h3>Product Setting</h3>
            </td>
      </tr>
               
               
             
        
        
        <tr >
            <td  >     
            set License period
            </td>
            <td > 
<!--                 <input class="form-control" type="text" name="license_period" placeholder="Months">  -->
               {{ Form::input('text', 'license_period', null, array('required' => 'true')) }}
          </tr>       
        

            <tr >
      
            <td  >     
            set trial period
            </td>
            <td > 
               {{ Form::input('text', 'trial_period', null, array('required' => 'true')) }} </td>
        </tr>     


         <tr>
            <td >Expiry notification before </td>
           <td> {{ Form::input('text', 'notify_before', null, array('required' => 'true')) }}</td>
          </tr>



       
        </tbody>

      </table>
<div1 style="margin-left: 40%; margin-top: 20%">
      {{ Form::submit('Update',['class' => 'btn btn-primary btn-sm']) }}
 <a href="{{ URL::route('licennses.index') }}" class="btn btn-primary btn-sm">Back</a>
    </div1>
</div1>
      {{ Form::close() }}
    </div>



@stop