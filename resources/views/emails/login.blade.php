
@extends('emails.Child')

@section('content')


   <center style="background-color:#edeff2;">
      
      <table style="max-width:100% !important;width:600px !important;min-width:600px !important;" class="mceItemTable" cellspacing="0" cellpadding="0" border="0" bgcolor="#edeff2" width="600">
        <tbody>
          <tr>
            <td colspan="2" style="vertical-align:bottom;" bgcolor="#edeff2" align="right" width="100%" height="45">

            </td>
          </tr>
        </tbody>
      </table>
      
      
      <table style="background-color:#fcfcfc;width:600px;" class="mceItemTable" cellspacing="0" cellpadding="0" border="0" bgcolor="#fcfcfc" width="600">
        <tbody>
          
          <tr>
            <td colspan="2" style="background-color:#fff;padding-left:0;padding-right:0;padding-top:0;padding-bottom:0;" bgcolor="#ffffff" width="100%">
              <a href="https://foxcsn.com/" style="width:100%;" target="_blank" rel=" noopener noreferrer"><img src="https://foxcsn.com/assets/email/logyes.jpg" style="width: 600px;" alt="FOXCSN" width="600"></a>
            </td>
          </tr>
          
          
          <tr>
            <td colspan="2" style="background-color:#fcfcfc;padding-left:40px;padding-right:40px;padding-top:15px;padding-bottom:0;" bgcolor="#fcfcfc" width="100%">
              <div style="font-family:Arial, Helvetica, sans-serif;">

                <h3>Successful login</h3>


                <table style="background-color:#fcfcfc;width:100%;" class="mceItemTable" cellspacing="0" cellpadding="0" border="0" bgcolor="#fcfcfc" width="100%">
                  <tbody><tr>
                    <td style="background-color:#fff;padding-left:20px;padding-right:20px;padding-top:20px;padding-bottom:40px;" bgcolor="#ffffff" width="100%">
                      <div style="font-family:Arial, Helvetica, sans-serif;">
                        <span style="font-size:14px;line-height:21px;padding:0;margin:0;">
                          
 
            Login: {!! Auth::user()->email !!} <br/>
            ip:    {!! $_SERVER['HTTP_CF_CONNECTING_IP'] !!} <br/>
            Date:  {!! date(DATE_RFC822) !!} 


                        </span>
                      </div>
                    </td>
                  </tr>
                </tbody></table>
              </div>
<br/><br/>
            </td>
          </tr>
        </tbody>
      </table>


@endsection