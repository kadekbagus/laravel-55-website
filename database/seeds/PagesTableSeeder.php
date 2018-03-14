<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pages')->insert([
        	['page_name' => 'home',
             'page_type' => 'main_page',
             'slug' => str_slug('home'),
             'status' => 'active',
             'content' => '<p align="justify">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>'
            ],
            ['page_name' => 'about us',
             'page_type' => 'main_page',
             'slug' => str_slug('about us'),
             'status' => 'active',
             'content' => '<h3>What is Lorem Ipsum?</h3>

<p align="justify"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

<h3>Where does it come from?</h3>

<p align="justify">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>

<p align="justify">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>

<p>&nbsp;</p>

<h3>Why do we use it?</h3>

<p align="justify">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>'
            ],
            ['page_name' => 'profile',
             'page_type' => 'main_page',
             'slug' => str_slug('profile'),
             'status' => 'active',
             'content' => '<hr />
<p><img alt="An illustration for the story The Nightingale and the Rose by the author Oscar Wilde" src="https://assets.americanliterature.com/al/images/story/the-nightingale-and-the-rose.jpg" class="responsive-img"/></p>

<p>&quot;She said that she would dance with me if I brought her red roses,&quot; cried the young Student; &quot;but in all my garden there is no red rose.&quot;</p>

<p>From her nest in the holm-oak tree the Nightingale heard him, and she looked out through the leaves, and wondered.</p>

<p>&quot;No red rose in all my garden!&quot; he cried, and his beautiful eyes filled with tears. &quot;Ah, fon what little things does happiness depend! I have read all that the wise men have written, and all the secrets of philosophy are mine, yet for want of a red rose is my life made wretched.&quot;</p>

<p>&quot;Here at last is a true lover,&quot; said the Nightingale. &quot;Night after night have I sung of him, though I knew him not: night after night have I told his story to the stars, and now I see him. His hair is dark as the hyacinth-blossom, and his lips are red as the rose of his desire; but passion has made his face like pale ivory, and sorrow has set her seal upon his brow.&quot;</p>

<p>&quot;The Prince gives a ball to-morrow night,&quot; murmured the young Student, &quot;and my love will be of the company. If I bring her a red rose she will dance with me till dawn. If I bring her a red rose, I shall hold her in my arms, and she will lean her head upon my shoulder, and her hand will be clasped in mine. But there is no red rose in my garden, so I shall sit lonely, and she will pass me by. She will have no heed of me, and my heart will break.&quot;</p>

<p>&quot;Here indeed is the true lover,&quot; said the Nightingale. &quot;What I sing of, he suffers - what is joy to me, to him is pain. Surely Love is a wonderful thing. It is more precious than emeralds, and dearer than fine opals. Pearls and pomegranates cannot buy it, nor is it set forth in the marketplace. It may not be purchased of the merchants, nor can it be weighed out in the balance for gold.&quot;</p>

<p>&quot;The musicians will sit in their gallery,&quot; said the young Student, &quot;and play upon their stringed instruments, and my love will dance to the sound of the harp and the violin. She will dance so lightly that her feet will not touch the floor, and the courtiers in their gay dresses will throng round her. But with me she will not dance, for I have no red rose to give her&quot;; and he flung himself down on the grass, and buried his face in his hands, and wept.</p>

<p>&quot;Why is he weeping?&quot; asked a little Green Lizard, as he ran past him with his tail in the air.</p>

<p>&quot;Why, indeed?&quot; said a Butterfly, who was fluttering about after a sunbeam.</p>

<p>&quot;Why, indeed?&quot; whispered a Daisy to his neighbour, in a soft, low voice.</p>

<p>&quot;He is weeping for a red rose,&quot; said the Nightingale.</p>'
            ]
        ]);
    }
}
