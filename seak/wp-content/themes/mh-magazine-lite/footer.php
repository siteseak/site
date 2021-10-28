<?php mh_before_footer(); ?>
<?php mh_magazine_lite_footer_widgets(); ?>

<!--
<div class="mh-copyright-wrap">
	<div class="mh-container mh-container-inner mh-clearfix">
		<p class="mh-copyright"><?php printf(esc_html__('Copyright &copy; %1$s | WordPress Theme by %2$s', 'mh-magazine-lite'), date("Y"), '<a href="' . esc_url('https://www.mhthemes.com/') . '" rel="nofollow">MH Themes</a>'); ?></p>
	</div>
</div>
-->



<div class="rodape-principal ">
   <div class="item-rodape item-rodape-endereco">
      <h5 class="titulo-rodape">Endereço</h5>
      <p>R. Cel. Fernando Machado, 883 <br> 
      Centro Histórico, Porto Alegre - RS <br>
      90010-310</p>
   </div>
   <div class="item-rodape">
      <h5 class="titulo-rodape">Contatos</h5>
      <p>Telefone:  (51) 3224-0309</p>
      <p>E-mail: <a href="mailto:seakadm@gmail.com">seakadm@gmail.com</a></p>
      <p><a href="mailto:seak.dout@gmail.com">seak.dout@gmail.com</a></p>
   </div>
   <div class="item-rodape">
      <a href="#"><h5 class="titulo-rodape">Nossas Redes sociais</h5>
      <a href="https://pt-br.facebook.com/seak.poa/" target="_blank"><i class="fab fa-facebook-square"></i></a>
     <!-- <a href="#" target="_blank"><i class="fab fa-instagram-square"></i></a> -->
      <a href="https://www.youtube.com/channel/UCQx3HjXRRgrEqFcT99Nio3A/" target="_blank"><i class="fab fa-youtube"></i></a>
      
   </div>
   <div class="item-rodape">
      <h5 class="titulo-rodape">Mantenha-se informado</h5>
      <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/seak1/'?>index.php/mantenha-se-informado/" target="_blank"><i class="far fa-envelope"></i></a>
   </div>
</div>

<div class="rodape-base">
 	 &#169; SEAK - Todos os direitos reservados.
</div>






<?php mh_after_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>
