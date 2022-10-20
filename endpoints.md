
# Endpoint

## Usages

All the endpoints can be  called into three different ways

#### as a payload

```php
$object  =  new RytrPhp('test123');
/** @var \Devkind\RytrPhp\Endpoints\GoogleAds */
$endpoint = $object->GoogleAds;
/** @var array */
$array = $endpoint->setPayload([
    "product_name" => 'test',
    "product_description" => 'test',
    "search_term" => 'test',
])->get();
```

#### through the setter methods

```php
$object  =  new RytrPhp('test123');
/** @var \Devkind\RytrPhp\Endpoints\GoogleAds */
$endpoint = $object->GoogleAds;
/** @var array */
$array = $endpoint->setProductName('test')
    ->setProductDescription('test')
    ->setSearchTerm('test')
    ->get();
```

#### through the `generate` method

```php
/** @var \Devkind\RytrPhp\Endpoints\GoogleAds */
$endpoint = $rytr->GoogleAds;
/** @var array */
$endpoint->generate(
	$product_name,
	$product_description,
	$search_term
);
```

#### through the `get` method

```php
/** @var array */
$endpoint = $rytr->GoogleAds->get([
    "product_name" => 'test',
    "product_description" => 'test',
    "search_term" => 'test',
]);
```

## Supported Objects / Endpoints:

- [generate-image](#generate-image)
- [google-ads](#google-ads)
- [google-ad-titles](#google-ad-titles)
- [google-ad-descriptions](#google-ad-descriptions)
- [facebook-ads](#facebook-ads)
- [linkedin-ad-headlines](#linkedin-ad-headlines)
- [linkedin-ad-descriptions](#linkedin-ad-descriptions)
- [linkedin-ads](#linkedin-ads)
- [linkedin-posts](#linkedin-posts)
- [landing-page-headlines](#landing-page-headlines)
- [landing-pages](#landing-pages)
- [product-descriptions](#product-descriptions)
- [amazon-product-descriptions](#amazon-product-descriptions)
- [amazon-product-titles](#amazon-product-titles)
- [amazon-product-features](#amazon-product-features)
- [amazon-ad-headlines](#amazon-ad-headlines)
- [blog-ideas](#blog-ideas)
- [blog-intros](#blog-intros)
- [blog-outlines](#blog-outlines)
- [feature-to-benefits](#feature-to-benefits)
- [content-rephrase](#content-rephrase)
- [sentence-expand](#sentence-expand)
- [content-shorten](#content-shorten)
- [listicle-ideas](#listicle-ideas)
- [emails](#emails)
- [emails-v2](#emails-v2)
- [growth-ideas](#growth-ideas)
- [startup-ideas](#startup-ideas)
- [pas](#pas)
- [aida](#aida)
- [meta-home](#meta-home)
- [meta-blog](#meta-blog)
- [meta-prod](#meta-prod)
- [youtube-titles](#youtube-titles)
- [youtube-ideas](#youtube-ideas)
- [youtube-outlines](#youtube-outlines)
- [youtube-descriptions](#youtube-descriptions)
- [youtube-intros](#youtube-intros)
- [keyword-extract](#keyword-extract)
- [product-names](#product-names)
- [analogies](#analogies)
- [short-press-releases](#short-press-releases)
- [company-bios](#company-bios)
- [company-vision](#company-vision)
- [company-mission](#company-mission)
- [personal-bios](#personal-bios)
- [summary](#summary)
- [ai-article-writer-v2](#ai-article-writer-v2)
- [ai-article-writer-v3](#ai-article-writer-v3)
- [subject-lines](#subject-lines)
- [cold-emails](#cold-emails)
- [real-estate-listing](#real-estate-listing)
- [review-responses](#review-responses)
- [quora-answers](#quora-answers)
- [paragraph-writer](#paragraph-writer)
- [conclusion-writer](#conclusion-writer)
- [instagram-captions](#instagram-captions)
- [tiktok-scripts](#tiktok-scripts)
- [tweets](#tweets)
- [tiktok-hooks](#tiktok-hooks)
- [story-generation](#story-generation)
- [question-generation](#question-generation)
- [call-to-action](#call-to-action)
- [lyrics-generator](#lyrics-generator)
- [define-this](#define-this)
- [google-ad-titles-v2](#google-ad-titles-v2)
- [google-ad-descriptions-v2](#google-ad-descriptions-v2)
- [bulletpoint-answers](#bulletpoint-answers)
- [rewrite-with-keywords](#rewrite-with-keywords)
- [ans-my-ques](#ans-my-ques)
- [app-notifications](#app-notifications)
- [pros-and-cons](#pros-and-cons)
- [active-voice](#active-voice)
- [youtube-hooks](#youtube-hooks)
- [instant-article-writer](#instant-article-writer)
- [youtube-intros-v2](#youtube-intros-v2)
- [youtube-descriptions-v2](#youtube-descriptions-v2)
- [review-generator](#review-generator)


#### Generate Image

Generate images that will make your content stand out from the crowd.

```php
/** @var \Devkind\RytrPhp\Endpoints\GenerateImage */
$endpoint = $rytr->GenerateImage;
$endpoint->generate(
	$prompt,
	$num_images,
	$image_width,
	$image_height
);
```

#### Google Ads

Quality ads that rank in the search results and drive more traffic.

```php
/** @var \Devkind\RytrPhp\Endpoints\GoogleAds */
$endpoint = $rytr->GoogleAds;
$endpoint->generate(
	$product_name,
	$product_description,
	$search_term
);
```

#### Google Ad Titles

Unique and appealing ad titles that make people click on your ad and buy from your site.

```php
/** @var \Devkind\RytrPhp\Endpoints\GoogleAdTitles */
$endpoint = $rytr->GoogleAdTitles;
$endpoint->generate(
	$product_name,
	$product_description,
	$primary_keyword,
	$secondary_keywords
);
```

#### Google Ad Descriptions

Top-performing Google ad copy that converts visitors into customers.

```php
/** @var \Devkind\RytrPhp\Endpoints\GoogleAdDescriptions */
$endpoint = $rytr->GoogleAdDescriptions;
$endpoint->generate(
	$product_name,
	$product_description,
	$primary_keyword,
	$secondary_keywords
);
```

#### Facebook Ads

Facebook ad copies that make your ads truly stand out.

```php
/** @var \Devkind\RytrPhp\Endpoints\FacebookAds */
$endpoint = $rytr->FacebookAds;
$endpoint->generate(
	$product_name,
	$product_description,
	$occasion,
	$promotion
);
```

#### Linkedin Ad Headlines

Attention-grabbing, click-inducing, and high-converting ad headlines for Linkedin.

```php
/** @var \Devkind\RytrPhp\Endpoints\LinkedinAdHeadlines */
$endpoint = $rytr->LinkedinAdHeadlines;
$endpoint->generate(
	$product_name,
	$product_description,
	$target_keywords,
	$promotion
);
```

#### Linkedin Ad Descriptions

Professional and eye-catching ad descriptions that will make your product shine.

```php
/** @var \Devkind\RytrPhp\Endpoints\LinkedinAdDescriptions */
$endpoint = $rytr->LinkedinAdDescriptions;
$endpoint->generate(
	$product_name,
	$product_description,
	$target_keywords,
	$promotion
);
```

#### Linkedin Ads

Eye-catching ads that will not only attract the right audience but also drive them to your lead magnet.

```php
/** @var \Devkind\RytrPhp\Endpoints\LinkedinAds */
$endpoint = $rytr->LinkedinAds;
$endpoint->generate(
	$product_name,
	$product_description,
	$target_keywords,
	$promotion
);
```

#### Linkedin Posts

LinkedIn posts that can be used as status updates or promoted to get more engagement.

```php
/** @var \Devkind\RytrPhp\Endpoints\LinkedinPosts */
$endpoint = $rytr->LinkedinPosts;
$endpoint->generate(
	$product_name,
	$product_description,
	$target_keywords
);
```

#### Landing Page Headlines

Unique and catchy headlines that are perfect for your product or service.

```php
/** @var \Devkind\RytrPhp\Endpoints\LandingPageHeadlines */
$endpoint = $rytr->LandingPageHeadlines;
$endpoint->generate(
	$product_name,
	$product_description
);
```

#### Landing Pages

Tailored high-converting landing page copies that drive more leads, sales, and signups.

```php
/** @var \Devkind\RytrPhp\Endpoints\LandingPages */
$endpoint = $rytr->LandingPages;
$endpoint->generate(
	$product_name,
	$product_description,
	$feature_1,
	$feature_2,
	$feature_3
);
```

#### Product Descriptions

Authentic product descriptions that will compel, inspire, and influence.

```php
/** @var \Devkind\RytrPhp\Endpoints\ProductDescriptions */
$endpoint = $rytr->ProductDescriptions;
$endpoint->generate(
	$product_name,
	$product_characteristics,
	$primary_keyword,
	$secondary_keyword,
	$tone_of_voice
);
```

#### Amazon Product Descriptions

Descriptions for Amazon products that rank on the first page of the search results.

```php
/** @var \Devkind\RytrPhp\Endpoints\AmazonProductDescriptions */
$endpoint = $rytr->AmazonProductDescriptions;
$endpoint->generate(
	$product_name,
	$product_description
);
```

#### Amazon Product Titles

Product titles that will make your product stand out in a sea of competition.

```php
/** @var \Devkind\RytrPhp\Endpoints\AmazonProductTitles */
$endpoint = $rytr->AmazonProductTitles;
$endpoint->generate(
	$product_name,
	$product_description,
	$target_keywords
);
```

#### Amazon Product Features

Advantages and features of your products that will make them irresistible to shoppers.

```php
/** @var \Devkind\RytrPhp\Endpoints\AmazonProductFeatures */
$endpoint = $rytr->AmazonProductFeatures;
$endpoint->generate(
	$product_name,
	$product_description
);
```

#### Amazon Ad Headlines

Awesome Amazon ad headlines that will increase your conversion rate.

```php
/** @var \Devkind\RytrPhp\Endpoints\AmazonAdHeadlines */
$endpoint = $rytr->AmazonAdHeadlines;
$endpoint->generate(
	$product_name,
	$product_description,
	$target_keywords
);
```

#### Blog Ideas

Article/blog ideas that you can use to generate more traffic, leads, and sales for your business.

```php
/** @var \Devkind\RytrPhp\Endpoints\BlogIdeas */
$endpoint = $rytr->BlogIdeas;
$endpoint->generate(
	$topic,
	$primary_keyword
);
```

#### Blog Intros

Enticing article/blog introductions that capture the attention of the audience.

```php
/** @var \Devkind\RytrPhp\Endpoints\BlogIntros */
$endpoint = $rytr->BlogIntros;
$endpoint->generate(
	$blog_title
);
```

#### Blog Outlines

Detailed article outlines that help you write better content on a consistent basis.

```php
/** @var \Devkind\RytrPhp\Endpoints\BlogOutlines */
$endpoint = $rytr->BlogOutlines;
$endpoint->generate(
	$blog_title,
	$blog_intro
);
```

#### Feature To Benefits

Unique content that focuses on features to emphasize benefits of your product or service.

```php
/** @var \Devkind\RytrPhp\Endpoints\FeatureToBenefits */
$endpoint = $rytr->FeatureToBenefits;
$endpoint->generate(
	$product_description,
	$feature
);
```

#### Content Rephrase

Rephrase your content in a different voice and style to appeal to different readers.

```php
/** @var \Devkind\RytrPhp\Endpoints\ContentRephrase */
$endpoint = $rytr->ContentRephrase;
$endpoint->generate(
	$content_to_rephrase,
	$tone_of_voice
);
```

#### Sentence Expand

Expand short sentences into more descriptive and interesting ones.

```php
/** @var \Devkind\RytrPhp\Endpoints\SentenceExpand */
$endpoint = $rytr->SentenceExpand;
$endpoint->generate(
	$content_to_expand,
	$tone_of_voice
);
```

#### Content Shorten

Short your content in a different voice and style to appeal to different readers.

```php
/** @var \Devkind\RytrPhp\Endpoints\ContentShorten */
$endpoint = $rytr->ContentShorten;
$endpoint->generate(
	$content_to_shorten
);
```

#### Listicle Ideas

Creative listicle ideas that are easy to write and perform well on social media.

```php
/** @var \Devkind\RytrPhp\Endpoints\ListicleIdeas */
$endpoint = $rytr->ListicleIdeas;
$endpoint->generate(
	$search_term
);
```

#### Emails

Professional-looking emails that help you engage leads and customers.

```php
/** @var \Devkind\RytrPhp\Endpoints\Emails */
$endpoint = $rytr->Emails;
$endpoint->generate(
	$key_points
);
```

#### Emails V2

Professional-looking emails that help you engage leads and customers.

```php
/** @var \Devkind\RytrPhp\Endpoints\EmailsV2 */
$endpoint = $rytr->EmailsV2;
$endpoint->generate(
	$recipient,
	$recipient_position,
	$description
);
```

#### Growth Ideas

High-impact growth tactics to help your business grow.

```php
/** @var \Devkind\RytrPhp\Endpoints\GrowthIdeas */
$endpoint = $rytr->GrowthIdeas;
$endpoint->generate(
	$product_name,
	$product_description,
	$target_keywords,
	$target_audience
);
```

#### Pas

The main formula for writing high-converting sales copy.

```php
/** @var \Devkind\RytrPhp\Endpoints\Pas */
$endpoint = $rytr->Pas;
$endpoint->generate(
	$product_name,
	$product_description
);
```

#### Aida

Tried and tested formula of Attention, Interest, Desire, Action that is proven to convert.

```php
/** @var \Devkind\RytrPhp\Endpoints\Aida */
$endpoint = $rytr->Aida;
$endpoint->generate(
	$product_description
);
```

#### Seo Meta Tags Home

A set of optimized meta title and meta description tags that will boost your search rankings for your home page.

```php
/** @var \Devkind\RytrPhp\Endpoints\MetaHome */
$endpoint = $rytr->MetaHome;
$endpoint->generate(
	$product_name,
	$product_description,
	$search_term,
	$primary_keyword
);
```

#### Seo Meta Tags Blog

A set of optimized meta title and meta description tags that will boost your search rankings for your blog.

```php
/** @var \Devkind\RytrPhp\Endpoints\MetaBlog */
$endpoint = $rytr->MetaBlog;
$endpoint->generate(
	$blog_description,
	$search_term,
	$blog_title,
	$primary_keyword
);
```

#### Seo Meta Tags Product

A set of optimized meta title and meta description tags that will boost your search rankings for your product page.

```php
/** @var \Devkind\RytrPhp\Endpoints\MetaProd */
$endpoint = $rytr->MetaProd;
$endpoint->generate(
	$product_name,
	$product_description,
	$search_term,
	$company_name,
	$primary_keyword
);
```

#### Youtube Titles

Catchy titles that attract more views and increase the number of shares.

```php
/** @var \Devkind\RytrPhp\Endpoints\YoutubeTitles */
$endpoint = $rytr->YoutubeTitles;
$endpoint->generate(
	$video_description,
	$search_term,
	$tone_of_voice
);
```

#### Youtube Ideas

Ready-made product video campaign ideas for you to use on YouTube.

```php
/** @var \Devkind\RytrPhp\Endpoints\YoutubeIdeas */
$endpoint = $rytr->YoutubeIdeas;
$endpoint->generate(
	$video_topic,
	$search_term,
	$tone_of_voice
);
```

#### Youtube Outlines

Video outlines that are a breeze to create and uber-engaging.

```php
/** @var \Devkind\RytrPhp\Endpoints\YoutubeOutlines */
$endpoint = $rytr->YoutubeOutlines;
$endpoint->generate(
	$video_title,
	$search_term,
	$tone_of_voice
);
```

#### Youtube Descriptions

Catchy and persuasive YouTube descriptions that help your videos rank higher.

```php
/** @var \Devkind\RytrPhp\Endpoints\YoutubeDescriptions */
$endpoint = $rytr->YoutubeDescriptions;
$endpoint->generate(
	$video_title,
	$search_term,
	$tone_of_voice
);
```

#### Youtube Intros

Catchy intros that will get viewers hooked before they even start watching.

```php
/** @var \Devkind\RytrPhp\Endpoints\YoutubeIntros */
$endpoint = $rytr->YoutubeIntros;
$endpoint->generate(
	$video_title,
	$search_term,
	$tone_of_voice
);
```

#### Keyword Extract

Keywords extracted from content that you can use for your optimization, SEO, or content creation purposes.

```php
/** @var \Devkind\RytrPhp\Endpoints\KeywordExtract */
$endpoint = $rytr->KeywordExtract;
$endpoint->generate(
	$content
);
```

#### Product Names

Catchy and meaningful names that fit your product or service.

```php
/** @var \Devkind\RytrPhp\Endpoints\ProductNames */
$endpoint = $rytr->ProductNames;
$endpoint->generate(
	$product_description,
	$target_keywords
);
```

#### Analogies

Unique analogies that make your sales pitch more memorable and engaging.

```php
/** @var \Devkind\RytrPhp\Endpoints\Analogies */
$endpoint = $rytr->Analogies;
$endpoint->generate(
	$content
);
```

#### Short Press Releases

Press release that you can use to promote your product or service to the media.

```php
/** @var \Devkind\RytrPhp\Endpoints\ShortPressReleases */
$endpoint = $rytr->ShortPressReleases;
$endpoint->generate(
	$information,
	$product_name,
	$target_keyword,
	$tone_of_voice
);
```

#### Company Bios

Short and sweet company bio that will help you connect with your target audience.

```php
/** @var \Devkind\RytrPhp\Endpoints\CompanyBios */
$endpoint = $rytr->CompanyBios;
$endpoint->generate(
	$company_name,
	$company_info,
	$tone_of_voice
);
```

#### Company Vision

A vision that attracts the right people, clients, and employees.

```php
/** @var \Devkind\RytrPhp\Endpoints\CompanyVision */
$endpoint = $rytr->CompanyVision;
$endpoint->generate(
	$company_name,
	$company_description
);
```

#### Company Mission

A clear and concise statement of your company's goals and purpose.

```php
/** @var \Devkind\RytrPhp\Endpoints\CompanyMission */
$endpoint = $rytr->CompanyMission;
$endpoint->generate(
	$company_name,
	$company_description
);
```

#### Personal Bios

Perfect bio copy that shows your expertise and drives more clients to you.

```php
/** @var \Devkind\RytrPhp\Endpoints\PersonalBios */
$endpoint = $rytr->PersonalBios;
$endpoint->generate(
	$name,
	$personal_info,
	$tone_of_voice
);
```

#### Summary

Shortened text copy that provides the main ideas and most important details of your original text.

```php
/** @var \Devkind\RytrPhp\Endpoints\Summary */
$endpoint = $rytr->Summary;
$endpoint->generate(
	$article_url,
	$article_text
);
```

#### Ai Article Writer V2

4-step, simplified GPT-3 article writer that can write unique articles instantly.

```php
/** @var \Devkind\RytrPhp\Endpoints\AiArticleWriterV2 */
$endpoint = $rytr->AiArticleWriterV2;
$endpoint->generate(
	$article_title,
	$article_intro,
	$article_sections
);
```

#### Ai Article Writer V3

Create up to 1500-word articles in just four steps with a guided process. You can choose title, intro, and outline, and customize them as needed.

```php
/** @var \Devkind\RytrPhp\Endpoints\AiArticleWriterV3 */
$endpoint = $rytr->AiArticleWriterV3;
$endpoint->generate(
	$article_title,
	$article_intro,
	$article_sections
);
```

#### Subject Lines

Powerful email subject lines that increase open rates

```php
/** @var \Devkind\RytrPhp\Endpoints\SubjectLines */
$endpoint = $rytr->SubjectLines;
$endpoint->generate(
	$product,
	$description
);
```

#### Cold Emails

Personalized email outreach to your target prospects that get better results.

```php
/** @var \Devkind\RytrPhp\Endpoints\ColdEmails */
$endpoint = $rytr->ColdEmails;
$endpoint->generate(
	$you,
	$to,
	$goal,
	$scenario
);
```

#### Real Estate Listing

Copy that makes your real-estate listings stand out from the crowd.

```php
/** @var \Devkind\RytrPhp\Endpoints\RealEstateListing */
$endpoint = $rytr->RealEstateListing;
$endpoint->generate(
	$type,
	$price,
	$location,
	$floor_area,
	$bedroom,
	$kitchen,
	$bathroom,
	$additional_features
);
```

#### Review Responses

Automatically generate personalized replies for both positive and negative reviews.

```php
/** @var \Devkind\RytrPhp\Endpoints\ReviewResponses */
$endpoint = $rytr->ReviewResponses;
$endpoint->generate(
	$review,
	$type,
	$company,
	$contact,
	$user
);
```

#### Quora Answers

Answers to Quora questions that will position you as an authority.

```php
/** @var \Devkind\RytrPhp\Endpoints\QuoraAnswers */
$endpoint = $rytr->QuoraAnswers;
$endpoint->generate(
	$question,
	$info
);
```

#### Paragraph Writer

Perfectly structured paragraphs that are easy to read and packed with persuasive words.

```php
/** @var \Devkind\RytrPhp\Endpoints\ParagraphWriter */
$endpoint = $rytr->ParagraphWriter;
$endpoint->generate(
	$paragraph_title
);
```

#### Conclusion Writer

Powerful conclusion copy that will make a reader take action.

```php
/** @var \Devkind\RytrPhp\Endpoints\ConclusionWriter */
$endpoint = $rytr->ConclusionWriter;
$endpoint->generate(
	$article
);
```

#### Instagram Captions

Captions that turn your images into attention-grabbing Instagram posts.

```php
/** @var \Devkind\RytrPhp\Endpoints\InstagramCaptions */
$endpoint = $rytr->InstagramCaptions;
$endpoint->generate(
	$description,
	$tone_of_voice
);
```

#### Tiktok Scripts

Video scripts that are ready to shoot and will make you go viral.

```php
/** @var \Devkind\RytrPhp\Endpoints\TiktokScripts */
$endpoint = $rytr->TiktokScripts;
$endpoint->generate(
	$description
);
```

#### Tweets

Generate tweets using AI, that are relevant and on-trend.

```php
/** @var \Devkind\RytrPhp\Endpoints\Tweets */
$endpoint = $rytr->Tweets;
$endpoint->generate(
	$topic
);
```

#### Tiktok Hooks

Perfect TikTok video hook to get more views and followers.

```php
/** @var \Devkind\RytrPhp\Endpoints\TiktokHooks */
$endpoint = $rytr->TiktokHooks;
$endpoint->generate(
	$description
);
```

#### Story Generation

Engaging and persuasive stories that will capture your reader's attention and interest.

```php
/** @var \Devkind\RytrPhp\Endpoints\StoryGeneration */
$endpoint = $rytr->StoryGeneration;
$endpoint->generate(
	$description,
	$tone_of_voice
);
```

#### Question Generation

A tool to create engaging questions and polls that increase audience participation and engagement.

```php
/** @var \Devkind\RytrPhp\Endpoints\QuestionGeneration */
$endpoint = $rytr->QuestionGeneration;
$endpoint->generate(
	$paragraph
);
```

#### Call To Action

Eye-catching calls to action that will encourage conversions and boost your sales.

```php
/** @var \Devkind\RytrPhp\Endpoints\CallToAction */
$endpoint = $rytr->CallToAction;
$endpoint->generate(
	$description
);
```

#### Lyrics Generator

Unique song lyrics that will be perfect for your next hit song.

```php
/** @var \Devkind\RytrPhp\Endpoints\LyricsGenerator */
$endpoint = $rytr->LyricsGenerator;
$endpoint->generate(
	$topic,
	$genre
);
```

#### Define This

A definition for a word, phrase, or acronym that's used often by your target buyers.

```php
/** @var \Devkind\RytrPhp\Endpoints\DefineThis */
$endpoint = $rytr->DefineThis;
$endpoint->generate(
	$keyword
);
```

#### Google Adv Titles V2

Creating ads with unique and appealing titles that entice people to click on your ad and purchase from your site.

```php
/** @var \Devkind\RytrPhp\Endpoints\GoogleAdTitlesV2 */
$endpoint = $rytr->GoogleAdTitlesV2;
$endpoint->generate(
	$company_name,
	$description,
	$keyword
);
```

#### Google Adv Descriptions V2

The best-performing Google ad copy converts visitors into customers..

```php
/** @var \Devkind\RytrPhp\Endpoints\GoogleAdDescriptionsV2 */
$endpoint = $rytr->GoogleAdDescriptionsV2;
$endpoint->generate(
	$name,
	$details
);
```

#### Bulletpoint Answers

Precise and informative bullet points that provide quick and valuable answers to your customers' questions.

```php
/** @var \Devkind\RytrPhp\Endpoints\BulletpointAnswers */
$endpoint = $rytr->BulletpointAnswers;
$endpoint->generate(
	$question
);
```

#### Rewrite With Keywords

Rewrite your existing content to include more keywords and boost your search engine rankings.

```php
/** @var \Devkind\RytrPhp\Endpoints\RewriteWithKeywords */
$endpoint = $rytr->RewriteWithKeywords;
$endpoint->generate(
	$article,
	$keywords
);
```

#### Ans My Ques

Instant, quality answers to any questions or concerns that your audience might have.

```php
/** @var \Devkind\RytrPhp\Endpoints\AnsMyQues */
$endpoint = $rytr->AnsMyQues;
$endpoint->generate(
	$question
);
```

#### App Notifications

Notification messages for your apps, websites, and mobile devices that keep users coming back for more.

```php
/** @var \Devkind\RytrPhp\Endpoints\AppNotifications */
$endpoint = $rytr->AppNotifications;
$endpoint->generate(
	$description
);
```

#### Pros And Cons

List of the main benefits versus the most common problems and concerns.

```php
/** @var \Devkind\RytrPhp\Endpoints\ProsAndCons */
$endpoint = $rytr->ProsAndCons;
$endpoint->generate(
	$paragraph
);
```

#### Active Voice

Easy and quick solution to converting your passive voice sentences into active voice sentences.

```php
/** @var \Devkind\RytrPhp\Endpoints\ActiveVoice */
$endpoint = $rytr->ActiveVoice;
$endpoint->generate(
	$sentence
);
```

#### Youtube Hooks

Generate catchy Youtube hooks to make your video stand out.

```php
/** @var \Devkind\RytrPhp\Endpoints\YoutubeHooks */
$endpoint = $rytr->YoutubeHooks;
$endpoint->generate(
	$video_title,
	$tone
);
```

#### Instant Article Writer

Instantly generate 1500-word articles with one click. This is an automated process, so your title must be very precise.

```php
/** @var \Devkind\RytrPhp\Endpoints\InstantArticleWriter */
$endpoint = $rytr->InstantArticleWriter;
$endpoint->generate(
	$article_title
);
```

#### Youtube Intros V2

Catchy intros that will get viewers hooked before they even start watching.

```php
/** @var \Devkind\RytrPhp\Endpoints\YoutubeIntrosV2 */
$endpoint = $rytr->YoutubeIntrosV2;
$endpoint->generate(
	$video_title,
	$hook,
	$tone
);
```

#### Youtube Descriptions V2

Catchy and persuasive YouTube descriptions that help your videos rank higher.

```php
/** @var \Devkind\RytrPhp\Endpoints\YoutubeDescriptionsV2 */
$endpoint = $rytr->YoutubeDescriptionsV2;
$endpoint->generate(
	$video_title,
	$keywords
);
```

#### Review Generator

Automatically generate personalized high-quality reviews for any product or service.

```php
/** @var \Devkind\RytrPhp\Endpoints\ReviewGenerator */
$endpoint = $rytr->ReviewGenerator;
$endpoint->generate(
	$product_name,
	$experience,
	$description
);
```