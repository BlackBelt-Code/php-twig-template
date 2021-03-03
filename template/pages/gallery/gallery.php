{% extends '/pages/master/base.php' %}
{% block title %}
    Gallery
{% endblock %}
{% block content %}
<div class="container">
    <div class="page-header">
        <h1>Gallery</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        {% for gambar in daftar_gambar %}
        <div class="col-xs-6 col-md-4">
            <a href="#" class="thumbnail">
                <img src="{{ gambar }}" alt="">
            </a>
        </div>
        {% endfor %}
    </div>
    {% endblock %}