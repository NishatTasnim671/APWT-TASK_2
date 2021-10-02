
<html>
    <body>
    
        <table width=100%>
            <tr><b>
                <td>
                    <a href="{{ route('home') }}">Home </a>
                </td>

                <td>
                    <a href="{{ route('service') }}">Service/Product </a>
                </td>

                <td>
                     <a href="{{ route('teams') }}">Our Teams </a>       
                </td>

                <td>
                    <a href="{{ route('about') }}">About Us</a>
                </td>

                <td>
                     <a href="{{ route('contact') }}">Contact Us </a>
                </td>

                <td>
                     <a href="{{ route('registration') }}">Registration </a>
                </td>

                <td>
                     <a href="{{ route('login') }}">Log in </a>
                </td>
</b>
            </tr>
        </table>

        @yield('content')
    </body>

</html>