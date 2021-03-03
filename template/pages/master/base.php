<!DOCTYPE html>
<html>

<head>
    {% block head %}
    <meta name="description" content="{{ deskripsi }}">
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <title>{% block title %}
        Logistik
        {% endblock %}</title>
    {% endblock %}
</head>

<body>
    {{ include('/pages/master/includes/haeder.php') }}
    <div id="content">
        {% block content %}
        {{ include('/pages/master/dashboard.php') }}
        {% endblock %}</div>
    <div id="footer">
        {% block footer %}
        <hr>
        {{ include('/pages/master/includes/footer.php') }}
        <script src="/static/js/jquery.js"></script>
        <script src="/static/js/bootstrap.min.js"></script>
        {% endblock %}
    </div>
</body>

</html>