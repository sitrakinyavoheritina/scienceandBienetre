
@include('layouts.index')


<div class="container-fluid">
	

    <div class="row">
    	<div class="col-6 col-sm-6 col-md-6">
    		<h1>Méthodes innovantes pour améliorer votre vie</h1>
    		<h4>La science au service de votre bien-être</h4>
        <p>
          Profitez des découvertes les plus récentes pour transformer votre quotidien et améliorer votre bien-être
        </p>
    		<a  href="{{ url('listpack') }}" title="hjkjh">
	    		<button> decouvrer nos solution</button>
    		</a>
    	</div>
    	<!-- <div class="col-6 col-sm-6 col-md-6">eto tsis ninin</div> -->
    		<!-- <button> decouvrer nos solution</button> -->

 	</div>
   <!-- <section> -->
   	<div class="row">
   		<div class="col-6">
   			<div class="card">
   				<h1>catalogue</h1>
   				<p>Le catalogue complet de nos programmes. Ces techniques simples et naturelles sont issues de nos recherches afin de vous permettre d’accéder à une meilleure qualité de vie. Retrouvez une silhouette tonique, accédez à un sommeil profond et réparateur, apprenez à vous relaxer efficacement, etc.</p>
          <a href="{{url('listpack')}}">
    		    <button>consulter notre catalogue</button>
          </a>
   			</div>
   		</div>
   		<div class="col-6">
   			<div class="card">
   				<h1>contact</h1>
   				<p>Science & Bien-Être
					Service Clients
					email : info@scienceetbienetre.com
					Tél. : 04 83 43 14 00 ou +33 483 431 400
					Du lundi au vendredi de 8h à 16h30</p>
          <a href="{{url('About')}} ">
    		    <button> nous contacter en ligne</button>
          </a>
   			</div>
   			
   		</div>
   	</div>

   	</div>
   <!-- </section> -->
</div>
   