<style type="text/css">
    table {
        width: 100%;
        table-layout: fixed;
    }

    .tbl-header {
        background-color: rgba(255, 255, 255, 0.4);
    }

    .tbl-content {
        height: 600px;
        overflow-x: auto;
        margin-top: 0px;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    th {
        padding: 20px 10px;
        text-align: left;
        font-weight: 500;
        font-size: 14px;
        color: #fff;
        text-transform: uppercase;
    }

    td {
        padding: 15px 10px;
        text-align: left;
        vertical-align: middle;
        font-weight: 300;
        font-size: 14px;
        color: #fff;
        border-bottom: solid 1px rgba(255, 255, 255, 0.1);
    }


    /* demo styles */

    /* @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700); */
    body {
        /* background: -webkit-linear-gradient(left, #25c481, #25b7c4);
        background: linear-gradient(to right, #25c481, #25b7c4); */
        background: linear-gradient(90deg,
                rgba(118, 163, 61, 1) 34%,
                rgba(38, 68, 143, 0.865983893557423) 100%);

        font-family: 'Roboto', sans-serif;
        color: white;
    }

    section {
        margin: 50px;
        padding-top: 10px;
    }


    /* follow me template */
    .made-with-love {
        margin-top: 40px;
        padding: 10px;
        clear: left;
        text-align: center;
        font-size: 12px;
        font-family: arial;
        color: #fff;
    }

    .made-with-love i {
        font-style: normal;
        color: #F50057;
        font-size: 14px;
        position: relative;
        top: 2px;
    }

    .made-with-love a {
        color: #fff;
        text-decoration: none;
    }

    .made-with-love a:hover {
        text-decoration: underline;
    }


    /* for custom scrollbar for webkit browser*/

    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.3);
    }

    ::-webkit-scrollbar-thumb {
        -webkit-box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.3);
    }



</style>
    @extends('layouts.mastercontact')
<section>
    <!--for demo wrap-->
    <h1>Listado de mails enviados desde la pagina</h1>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                    <th>Enviado</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Text</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
                @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->created_at }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->message }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
