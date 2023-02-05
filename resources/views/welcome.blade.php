<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@lang('app.app_name')</title>

        <style type="text/css">

            table {
              font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }

            table td, table th {
              border: 1px solid #ddd;
              padding: 8px;
            }

            table tr:nth-child(even){background-color: #f2f2f2;}

            table tr:hover {background-color: #ddd;}

            table th {
              padding-top: 12px;
              padding-bottom: 12px;
              text-align: left;
              background-color: #4CAF50;
              color: white;
            }

        </style>

    </head>
    
    <body>

        <h1>@lang('app.app_name')</h1>

    	<h3>@lang('app.select_locale')</h3>

    	<ul>
    		<li>
    			<a class="dropdown-item" href="lang/en">English</a>
    		</li>
    		<li>
    			<a class="dropdown-item" href="lang/es">Spanish</a>
    		</li>
    	</ul>

        <h2>@lang('app.test')</h2>

        <h3>@lang('app.articles')</h3>

        <table>
            
            <thead>
                <th>@lang('app.title')</th>
                <th>@lang('app.content')</th>
                <th>Locale</th>
            </thead>

            <tbody>
                
                @foreach(\App\Models\Article::all() as $article)

                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->content }}</td>
                        <td>{{ $article->locale }}</td>
                    </tr>

                @endforeach 

            </tbody>

        </table>
        
    </body>
    
</html>
