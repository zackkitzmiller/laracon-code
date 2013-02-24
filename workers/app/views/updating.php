<html>
<head>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>
<body>
    <h1 id="status">Updating...</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis felis lectus, adipiscing vitae eleifend non, semper et turpis. Nulla sagittis suscipit purus a ultricies. Praesent in elit arcu. Suspendisse blandit tristique gravida. Cras a quam diam. Donec ullamcorper vestibulum urna et volutpat. Vestibulum pharetra commodo tellus a auctor. Nullam eu felis vel justo vehicula hendrerit aliquam ut elit. Cras sit amet porttitor nulla. Duis ultrices nunc nec lacus imperdiet aliquam. Praesent vel est enim, non mollis justo. Cras sit amet dui nunc, non euismod augue. Nunc venenatis, quam ac ornare pulvinar, odio justo cursus nulla, vel ullamcorper urna libero sed libero. Nunc ut interdum massa.</p>

<p>Aenean eu faucibus eros. Cras et sollicitudin velit. Aliquam erat volutpat. Mauris tempus accumsan ante, in elementum mi pharetra vel. Nam purus leo, sodales a mollis eu, molestie ac massa. Sed laoreet adipiscing sem sagittis sollicitudin. In hac habitasse platea dictumst. Phasellus eu quam risus, quis lacinia metus. Cras porta venenatis sapien, quis rhoncus ante consectetur a. Cras non lorem libero, vel pharetra urna. Fusce sit amet turpis diam. Cras pulvinar ante vehicula leo tristique egestas in volutpat nibh. Phasellus congue, ligula in tincidunt faucibus, nulla nulla venenatis massa, eget tristique eros sem at turpis. Phasellus semper hendrerit elit vel porttitor. Mauris feugiat consequat metus, ut placerat quam dapibus ut.</p>

<p>Proin pellentesque mi eget est tincidunt bibendum. Fusce at tortor felis. Vivamus felis purus, pellentesque at fermentum vel, pellentesque vel sem. Mauris nec mauris arcu, vitae imperdiet arcu. Mauris sodales mauris ut risus pharetra congue. Aenean ultrices consequat faucibus. Fusce ornare posuere dolor non sagittis. Nam eget imperdiet magna. Quisque libero mauris, viverra sit amet ornare eu, aliquam et eros. Morbi elementum, nulla ut tempor aliquam, elit turpis dapibus est, vel scelerisque tortor turpis vel dui. Donec eget ultricies odio. Mauris at neque id purus tincidunt vehicula quis ut massa. Sed nec risus sem.</p>

<p>Aenean elementum aliquam augue et porttitor. Ut nisi quam, gravida ac lacinia et, tempor non odio. Proin eu accumsan dui. Maecenas euismod euismod ante in rhoncus. Nulla a quam ac arcu tristique gravida. Nam et quam sed quam vestibulum dignissim. Pellentesque pulvinar sapien in tellus faucibus hendrerit. Nam cursus pharetra nisi consectetur viverra. Proin lectus velit, adipiscing in dignissim vel, elementum at erat. Nam orci nunc, eleifend molestie semper eget, consequat vel nibh. Sed quis rhoncus orci. Vivamus ac dapibus quam. Proin ultricies accumsan nulla, ut rutrum libero venenatis sit amet. Nulla facilisi.</p>

<p>Sed non lacus sem. Cras sed sem et mauris placerat accumsan. Vivamus dapibus ligula vitae dui tristique pretium. Nam ultrices quam eu massa porta eget tempor libero consectetur. Vivamus facilisis, lorem eget commodo malesuada, odio metus suscipit felis, at consectetur neque dui et lectus. Aliquam fringilla cursus venenatis. Mauris non placerat augue. Praesent vulputate velit a urna vulputate congue. Phasellus eget ipsum erat. Sed interdum tellus nec tortor cursus luctus in eget nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut scelerisque auctor lectus. Phasellus fringilla neque in purus lobortis sodales. Aliquam aliquet, nisi et ultricies hendrerit, sapien justo varius urna, non bibendum erat metus sit amet enim. Phasellus ornare purus eget turpis ultrices eget tincidunt justo condimentum.</p>



    <script type="text/javascript">
    $('document').ready(function() {



    var interval_id = setInterval(function() {
        $.get('/poll', function(resp) {
            if (resp.updated === true) {
                $('#status').html('Updated!');
                clearInterval(interval_id);
            }
        }, 'json')
    }, 1000);

    });
    </script>
</body>
</html>