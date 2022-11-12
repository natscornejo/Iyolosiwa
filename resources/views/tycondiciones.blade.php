@extends('layouts.app')

@section('contentNavBar')
	@include('utilities.navbar')
@endsection

@section('content')

<div class="container">
	<div class="row col-md-12 py-4">
		<h1>Términos y condiciones</h1>
		<hr>
		<div class="pb-4">
			<h2>¡Bienvenido a Iyolosiwaleon.org!</h2>
			<p>Estos términos y condiciones describen las reglas y regulaciones para el uso del sitio web de Iyolosiwa, ubicado en <a href="{{ route('Inicio') }}">{{ route('Inicio') }}</a>
			Al acceder a este sitio web, asumimos que aceptas estos términos y condiciones. No continúes usando <a href="{{ route('Inicio') }}">{{ route('Inicio') }}</a> si no estás de acuerdo con todos los términos y condiciones establecidos en esta página.
			</p>
		</div>

		<div class="pb-4">
			<h2>Cookies</h2>
			<p>El sitio web utiliza cookies para ayudar a personalizar tu experiencia en línea. Al acceder a <a href="{{ route('Inicio') }}">{{ route('Inicio') }}</a>, aceptaste utilizar las cookies necesarias.

			Una cookie es un archivo de texto que un servidor de páginas web coloca en tu disco duro. Las cookies no se pueden utilizar para ejecutar programas o enviar virus a tu computadora. Las cookies se te asignan de forma exclusiva y solo un servidor web en el dominio que emitió la cookie puede leerlas.

			Podemos utilizar cookies para recopilar, almacenar y rastrear información con fines estadísticos o de marketing para operar nuestro sitio web. Tienes la capacidad de aceptar o rechazar cookies opcionales. Hay algunas cookies obligatorias que son necesarias para el funcionamiento de nuestro sitio web. Estas cookies no requieren tu consentimiento ya que siempre funcionan. Ten en cuenta que al aceptar las cookies requeridas, también aceptas las cookies de terceros, que podrían usarse a través de servicios proporcionados por terceros si utilizas dichos servicios en nuestro sitio web, por ejemplo, una ventana de visualización de video proporcionada por terceros e integrada en nuestro sitio web.</p>
		</div>

		<div class="pb-4">
			<h2>Licencia</h2>
			<p>A menos que se indique lo contrario, Iyolosiwa y/o sus licenciantes poseen los derechos de propiedad intelectual de todo el material en Iyolosiwaleon.org. Todos los derechos de propiedad intelectual son reservados. Puedes acceder desde Iyolosiwaleon.org para tu uso personal sujeto a las restricciones establecidas en estos términos y condiciones.</p>
		</div>

		<div class="pb-4">
			<h2>No debes</h2>
			<ol class="list-group list-group-numbered pb-3">
				<li class="list-group-item">Copiar o volver a publicar material de {{ route('Inicio') }}</li>
				<li class="list-group-item">Vender, alquilar o sublicenciar material de {{ route('Inicio') }}</li>
				<li class="list-group-item">Reproducir, duplicar o copiar material de {{ route('Inicio') }}</li>
				<li class="list-group-item">Redistribuir contenido de {{ route('Inicio') }}</li>
			</ol>

			<p>Partes de este sitio web ofrecen a los usuarios la oportunidad de publicar e intercambiar opiniones e información en determinadas áreas. {{ route('Inicio') }} no filtra, edita, publica ni revisa los comentarios antes de su presencia en el sitio web. Los comentarios no reflejan los puntos de vista ni las opiniones de {{ route('Inicio') }}, sus agentes y/o afiliados. Los comentarios reflejan los puntos de vista y opiniones de la persona que publica. En la medida en que lo permitan las leyes aplicables, {{ route('Inicio') }} no será responsable de los comentarios ni de ninguna responsabilidad, daños o gastos causados o sufridos como resultado de cualquier uso o publicación o apariencia de comentarios en este sitio web.

			{{ route('Inicio') }} se reserva el derecho de monitorear todos los comentarios y eliminar los que puedan considerarse inapropiados, ofensivos o que incumplan estos Términos y Condiciones.</p>
		</div>

		<div class="pb-4">
			<h2>Garantizas y declaras que</h2>
			<p>Tienes derecho a publicar comentarios en nuestro sitio web y tienes todas las licencias y consentimientos necesarios para hacerlo; Los comentarios no invaden ningún derecho de propiedad intelectual, incluidos, entre otros, los derechos de autor, patentes o marcas comerciales de terceros; Los comentarios no contienen ningún material difamatorio, calumnioso, ofensivo, indecente o ilegal de otro modo, que sea una invasión de la privacidad.</p>
			<p>Los comentarios no se utilizarán para solicitar o promover negocios o actividades comerciales personalizadas o presentes o actividades ilegales. Por la presente, otorgas a Iyolosiwa una licencia no exclusiva para usar, reproducir, editar y autorizar a otros a usar, reproducir y editar cualquiera de tus comentarios en todas y cada una de las formas, formatos, o medios.</p>
		</div>

		<div class="pb-4">
			<h2>Hipervínculos a nuestro contenido</h2>
			<p>Las siguientes organizaciones pueden vincularse a nuestro sitio web sin aprobación previa por escrito:</p>
			<ol class="list-group list-group-numbered pb-3">
				<li class="list-group-item">Agencias gubernamentales;</li>
				<li class="list-group-item">Motores de búsqueda;</li>
				<li class="list-group-item">Organizaciones de noticias;</li>
				<li class="list-group-item">Los distribuidores de directorios en línea pueden vincularse a nuestro sitio web de la misma manera que hacen hipervínculos a los sitios web de otras empresas que figuran en la lista; y</li>
				<li class="list-group-item">Empresas acreditadas en todo el sistema, excepto que soliciten organizaciones sin fines de lucro, centros comerciales de caridad y grupos de recaudación de fondos de caridad que no pueden hacer hipervínculos a nuestro sitio web.</li>
			</ol>
			<p>Estas organizaciones pueden enlazar a nuestra página de inicio, a publicaciones o a otra información del sitio siempre que el enlace: <strong>(a)</strong> no sea engañoso de ninguna manera; <strong>(b)</strong> no implique falsamente patrocinio, respaldo o aprobación de la parte vinculante y sus productos y/o servicios; y <strong>(c)</strong> encaja en el contexto del sitio de la parte vinculante.</p>

			<h3 class="pt-3">Podemos considerar y aprobar otras solicitudes de enlaces de los siguientes tipos de organizaciones:</h3>
			<p>Las siguientes organizaciones pueden vincularse a nuestro sitio web sin aprobación previa por escrito:</p>
			<ol class="list-group list-group-numbered pb-3">
				<li class="list-group-item">fuentes de información de consumidores y/o empresas comúnmente conocidas;</li>
				<li class="list-group-item">sitios de la comunidad .com;</li>
				<li class="list-group-item">asociaciones u otros grupos que representan organizaciones benéficas;</li>
				<li class="list-group-item">distribuidores de directorios en línea;</li>
				<li class="list-group-item">portales de Internet;</li>
				<li class="list-group-item">firmas de contabilidad, derecho y consultoría; y</li>
				<li class="list-group-item">instituciones educativas y asociaciones comerciales.</li>
			</ol>

			<p>Aprobaremos las solicitudes de enlace de estas organizaciones si: <strong>(a)</strong>  el enlace no nos haría vernos desfavorablemente a nosotros mismos ni a nuestras empresas acreditadas; <strong>(b)</strong> la organización no tiene registros negativos con nosotros; <strong>(c)</strong> el beneficio para nosotros de la visibilidad del hipervínculo compensa la ausencia de Iyolosiwa; y <strong>(d)</strong> el enlace está en el contexto de información general de recursos.</p>

			<p>Estas organizaciones pueden enlazar a nuestra página de inicio siempre que el enlace: <strong>(a)</strong> no sea engañoso de ninguna manera; <strong>(b)</strong> no implique falsamente patrocinio, respaldo o aprobación de la parte vinculante y sus productos o servicios; y <strong>(c)</strong> encaja en el contexto del sitio de la parte vinculante.</p>

			<p>Si eres una de las organizaciones enumeradas en el párrafo 2 y estás interesada en vincularte a nuestro sitio web, debes informarnos enviando un correo electrónico a Iyolosiwa. Incluye tu nombre, el nombre de tu organización, la información de contacto, así como la URL de tu sitio, una lista de las URL desde las que tienes la intención de vincular a nuestro sitio web y una lista de las URL de nuestro sitio a las que te gustaría acceder. Espera 2-3 semanas para recibir una respuesta.</p>

			<h3 class="pt-3">Las organizaciones aprobadas pueden hacer hipervínculos a nuestro sitio web de la siguiente manera:</h3>
			<ol class="list-group list-group-numbered pb-3">
				<li class="list-group-item">Mediante el uso de nuestro nombre corporativo; o</li>
				<li class="list-group-item">Mediante el uso del localizador uniforme de recursos al que se está vinculando; o</li>
			</ol>
			<p>Usar cualquier otra descripción de nuestro sitio web al que está vinculado que tenga sentido dentro del contexto y formato del contenido en el sitio de la parte vinculante.</p>
			<p>No se permitirá el uso del logotipo de {{ route('Inicio') }} u otro material gráfico para vincular sin un acuerdo de licencia de marca comercial.</p>
		</div>

		<div class="pb-4">
			<h2>Responsabilidad del contenido</h2>
			<p>No seremos responsables de ningún contenido que aparezca en tu sitio web. Aceptas protegernos y defendernos contra todas las reclamaciones que se presenten en tu sitio web. Ningún enlace(s) debe aparecer en ningún sitio web que pueda interpretarse como difamatorio, obsceno o criminal, o que infrinja, de otra manera viole o defienda la infracción u otra violación de los derechos de terceros.</p>
		</div>

		<div class="pb-4">
			<h2>Reserva de derechos</h2>
			<p>Nos reservamos el derecho de solicitar que elimines todos los enlaces o cualquier enlace en particular a nuestro sitio web. Apruebas eliminar de inmediato todos los enlaces a nuestro sitio web cuando se solicite. También nos reservamos el derecho de modificar estos términos y condiciones y su política de enlaces en cualquier momento. Al vincular continuamente a nuestro sitio web, aceptas estar vinculado y seguir estos términos y condiciones de vinculación.</p>
		</div>

		<div class="pb-4">
			<h2>Eliminación de enlaces de nuestro sitio web</h2>
			<p>Si encuentras algún enlace en nuestro sitio que sea ofensivo por cualquier motivo, puedes contactarnos e informarnos en cualquier momento. Consideraremos las solicitudes para eliminar enlaces, pero no estamos obligados a hacerlo ni a responder directamente.</p>
			<p>No nos aseguramos de que la información de este sitio web sea correcta. No garantizamos su integridad o precisión, ni prometemos asegurarnos de que el sitio web permanezca disponible o que el material en el sitio se mantenga actualizado.</p>
		</div>
		
		<div class="pb-4">
			<h2>Exención de responsabilidad</h2>
			<p>En la medida máxima permitida por la ley aplicable, excluimos todas las representaciones, garantías y condiciones relacionadas con nuestro sitio web y el uso de este. Nada en este descargo de responsabilidad:</p>
			<ol class="list-group list-group-numbered pb-3">
				<li class="list-group-item">limitará o excluirá nuestra responsabilidad o la tuya por muerte o lesiones personales;</li>
				<li class="list-group-item">limitará o excluirá nuestra responsabilidad o la tuya por fraude o tergiversación fraudulenta;</li>
				<li class="list-group-item">limitará cualquiera de nuestras responsabilidades o las tuyas de cualquier manera que no esté permitida por la ley aplicable; o</li>
				<li class="list-group-item">excluirá cualquiera de nuestras responsabilidades o las tuyas que no puedan estar excluidas según la ley aplicable.</li>
			</ol>
			<p>Las limitaciones y prohibiciones de responsabilidad establecidas en esta sección y en otras partes de este descargo de responsabilidad: <strong>(a)</strong> están sujetas al párrafo anterior; y <strong>(b)</strong> regirá todas las responsabilidades que surjan en virtud de la exención de responsabilidad, incluidas las responsabilidades que surjan en el contrato, en agravio y por incumplimiento de la obligación legal.</p>

			<p>Siempre que el sitio web y la información y los servicios en el sitio se proporcionen de forma gratuita, no seremos responsables de ninguna pérdida o daño de cualquier naturaleza.</p>
		</div>
	</div>
</div>
@endsection

@section('contentFooter')
	@include('utilities.footer')
@endsection