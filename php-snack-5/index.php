<!-- 
## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo.-->


 <?php

$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta autem minus rerum optio error. Aspernatur quam neque, vel repudiandae minima ipsam, pariatur reprehenderit nam provident ratione cum. Veritatis incidunt repellendus libero nesciunt distinctio alias doloremque aspernatur sit commodi excepturi, voluptates dolorum reiciendis, placeat illum delectus. Quasi repellat, impedit tenetur voluptatibus mollitia facilis, numquam nam, reiciendis quisquam commodi officia sunt aperiam maiores iure aut. Perspiciatis suscipit asperiores totam ex optio eum ea aut. Alias, totam, nesciunt distinctio, nobis fugiat obcaecati aliquam hic asperiores illo earum id rem ipsa ab dolorem similique velit soluta tempora possimus excepturi ipsum doloremque iste. Temporibus consequatur ad commodi qui dolor. Aliquid molestias vitae culpa voluptates enim quis impedit nulla deserunt nostrum earum error dignissimos modi veritatis at nisi similique mollitia ullam facilis quasi, harum odit corporis nesciunt. Assumenda est eum provident illum, eius et dolor laudantium voluptates quas nesciunt soluta, quae veniam praesentium magnam porro omnis, blanditiis asperiores voluptas quo voluptatem id cumque doloribus libero. Laboriosam iure repudiandae obcaecati debitis similique odio maiores tempore eaque, quisquam, adipisci fugiat, voluptatibus cupiditate architecto numquam temporibus modi hic ipsam voluptatum. Recusandae reprehenderit voluptatum, quibusdam voluptate vero, totam provident aspernatur perferendis optio iste quia labore hic quae error tempora nemo doloribus aut, dolorem ea. Amet iure repellendus consequuntur pariatur error, laudantium eum nostrum ab, molestiae dicta quaerat nesciunt alias quos reprehenderit delectus illum, dolor eaque dolore eligendi? Vel id, natus provident expedita libero nisi sed accusantium rerum ab dignissimos debitis nostrum incidunt odio minima adipisci omnis ea voluptas animi dolore quia fugit! Aut aliquid cum dolorem repellat hic nostrum ipsa voluptatibus id reiciendis nam ea nobis aliquam magnam repellendus quia laborum, voluptate dolores, consequatur nulla. Cumque sit perferendis aperiam veritatis eum, inventore saepe dolorum explicabo culpa expedita eaque enim, obcaecati eligendi laboriosam, reprehenderit magnam voluptatem quas fuga suscipit unde fugiat?
";

$splittedText = explode(".",$text);


for($i=0; $i < count($splittedText);$i++){
   echo $splittedText[$i] . '<br>';
}

 ?>

