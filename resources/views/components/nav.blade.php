
<nav class="hidden lg:flex h-10v bg-nav space-y-2 space-x-3 ">
    <a class="btn btn-primary" href="/">Home</a>
    <a class="btn btn-primary" href="about">Conócenos</a>
    <a class="btn btn-primary" href="contact">Contacta</a>
    <a class="btn btn-primary" href="proyectos">Proyectos</a>
    <a class="btn btn-primary" href="alumnos">Alumnos</a>
    {{$slot}}
</nav>
<nav class="lg:hidden flex flex-col bg-nav space-y-2 space-x-3 ">
    <a class="btn btn-primary" href="/">Home</a>
    <a class=" w-full btn btn-primary" href="about">Conócenos</a>
    <a class="w-full btn btn-primary" href="contact">Contacta</a>
    <a class="w-full btn btn-primary" href="proyectos">Proyectos</a>
    <a class="w-full btn btn-primary" href="alumnos">Alumnos</a>
    {{$slot}}
</nav>
