<!DOCTYPE html>

<html >
    <head>
  		<meta charset="UTF-8">
      <title>Gear Me Sports | Privacy Policy</title>
      <link rel="icon" type="image/png" href="http://sulley.cah.ucf.edu/~al174346/group11/A/img/favicon.png">

      <!--THESE ARE THE STYLESHEETS AND THE GOOGLE FONT-->

      <style type="text/css">@import url('css/resetcss.css');</style>
      <style type="text/css">@import url('css/styles.css');</style>
      <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109733750-1');
</script>
    </head>

<body>

  <!--THESE ARE THE ICONS, SEARCH BAR AND LOGO-->

  <a target="blank" class= "top" href="Map.html">
    Find a store
  <img src="http://sulley.cah.ucf.edu/~al174346/group11/A/img/location.png" alt="Location Icon"  style="width: 30px; height: 30px;" >

  </a>
  <?php

  if (isset($_SESSION['user_admin']) || isset($_SESSION['user_member']) ) {

    echo "<a target=\"_blank\" class=\"signin\" href=\"http://sulley.cah.ucf.edu/~al174346/group11/A/loginform2gms.php\">
    log out\" </a>";

  echo "logged in as " . $_SESSION['logged_in_user'];
  }


  else{
  echo "<a target=\"_blank\" class=\"signin\" href=\"http://sulley.cah.ucf.edu/~al174346/group11/A/loginform2gms.php\">
  Sign In </a>";
    //donothing
  }
  ?>

  <a  href="http://sulley.cah.ucf.edu/~al174346/group11/A/storeprofile.php">
  <img src="http://sulley.cah.ucf.edu/~al174346/group11/A/img/profile-icon.png" alt="Profile Icon" class="profileicon" >
  </a>
  <hr>

  <div class="section group">

    <div class="col span_1_of_3">
      <a  href="http://sulley.cah.ucf.edu/~al174346/group11/A/storefront.php">
      <img src="http://sulley.cah.ucf.edu/~al174346/group11/A/img/GearME_logo.png"  class= "logo" alt="logo" >
      </a>
    </div>

    <div class="col span_1_of_3">


      <form class="search">
      <input type="text" class="search" name="search" placeholder="Search...">
      </form>
    </div>

    <div class="col span_1_of_3">
      <?php

      if (isset($_SESSION['user_admin']) || isset($_SESSION['user_member']) ) {

        echo "<a  href=\"http://sulley.cah.ucf.edu/~al174346/group11/A/cart.php\">
        <img src=\"http://sulley.cah.ucf.edu/~al174346/group11/A/img/cart-icon.png\" alt=\"Cart Icon\" class=\"carticon\" >
      </a>";

      echo "logged in as " . $_SESSION['logged_in_user'];
      }


      else{
    echo "<a  href=\"http://sulley.cah.ucf.edu/~al174346/group11/A/cartguest.php\">
    <img src=\"http://sulley.cah.ucf.edu/~al174346/group11/A/img/cart-icon.png\" alt=\"Cart Icon\" class=\"carticon\" >
  </a>";
        //donothing
      }
      ?>

    </div>

  </div>

  <!--END OF THE HEADER (ICONS, SEARCH BAR AND LOGO)-->


  <!--NAVIGATION BAR-->

  <ul class="nav">

     <li class="nav"><a  href="http://sulley.cah.ucf.edu/~al174346/group11/A/storefront.php">Home</a></li>
    <li class="dropdown"><a href="http://sulley.cah.ucf.edu/~al174346/group11/A/catalog.php" class="dropbtn">Catalog<img src="http://sulley.cah.ucf.edu/~al174346/group11/A/img/arrow.png" alt="Arrow" style="height: 20px; width: 20px; margin-left: 10px;"></a>
      <div class="dropdown-content">
       <a href="football.php">Football</a>
        <a href="basketball.php">Basketball</a>
        <a href="baseball.php">Baseball</a>
        <a href="golf.php">Golf</a>
        <a href="soccer.php">Soccer</a>
       </li>

    <?php
  session_start();
    if (isset($_SESSION['user_admin'])) {

    echo "<li class=\"nav\"><a href=\"admin\">Admin</a></li>";

    echo "logged in as " . $_SESSION['logged_in_user'];
    }
    if (isset($_SESSION['user_member'])) {

    echo "<li class=\"nav\"><a href=\"storeprofile.php\">profile</a></li>";

    echo "logged in as " . $_SESSION['logged_in_user'];
    }

    else{

      //donothing
    }
    ?>
    <li class="nav"><a href="http://sulley.cah.ucf.edu/~al174346/group11/A/register2gms.php">Sign Up</a></li>
    <li class="nav"><a href="http://sulley.cah.ucf.edu/~al174346/group11/A/aboutus.php">About Us</a></li>
    <li class="nav"><a href="http://sulley.cah.ucf.edu/~al174346/group11/A/contact.php">Contact</a></li>

  </ul>

<!--END OF NAVIGATION BAR-->

<!--I WOULD GUESS THIS IS WHERE THE CATEGORIES WOULD GO-->
  <br/>
  <br/>


 <h2 class="titles">
  Privacy Policy
</h2>
<br/><br/><br/>

<p>
  Gear Me Sports and its Family of Businesses (collectively, "Gear Me", “us”, “our” or “we”) provide this privacy policy (this "Policy") to inform you of: (1) the types of information we collect; (2) your choices surrounding such information; and (3) how we collect, use, share, update and secure such information. This Policy applies to information obtained in connection with Gear Me operations at or through our websites, our mobile/tablet sites, our social media presence, our applications, our registration and event services, our messaging platforms, our stores, our kiosks, and other Gear Me owned or controlled digital and omni-channel properties that link to this Policy (collectively, our "Website"). Emails, social media, marketing campaigns and digital and online advertising are referred to collectively as, our "Internet Marketing Channels." <br/><br/>

This Policy does not create a contractual obligation between you and Gear Me, and it is subject to our Terms of Use. If you have questions about this Policy, please contact us by using the "Contact Customer Service" link below.<br/><br/>

Information Collected<br/>
Information You Provide: We receive information you provide to us when you:<br/>
create an account with us (including a shopping account online, an account to review products, a customer loyalty account, a team sports or event registration account or any other type of account);<br/>
apply for a credit card through us or our banking partners;<br/>
make a purchase;<br/>
apply for employment opportunities;<br/>
apply for a license (e.g., hunting, fishing, etc.) or conduct a similar type transaction related to governmental compliance;<br/>
contact us via any customer service method;<br/>
submit user-generated content (via our Websites, Internet Marketing Channels or otherwise);<br/>
participate in customer research, surveys, sweepstakes or promotions;<br/>
subscribe for email, text, or other messages;<br/>
work with our Associates who provide you with in-store services or otherwise assist you with your product needs and purchases through use of Websites;<br/>
download or use our Websites;<br/>
file a claim or participate in investigations regarding claims or losses; or<br/>
otherwise communicate information to us.<br/><br/>
Personal vs. Non-Personal Information. Some of the information we collect includes personal information, such as your name, mailing address, e-mail address, driver's license number, date of birth, social security number, credit/debit card information (and related payment information) and/or telephone number that may identify you as an individual (“Personal Information”). If you or an Organization (as defined below) to which you or your minor child belongs create an account on one of our team sports or event Websites, the Personal Information we collect may relate to minor children. By providing the Organization or us with such child’s Personal Information, you represent that you are such minor child’s parent, guardian or otherwise have the authority to share this Personal Information with the Organization and us and further consent to the Organization directly sharing such information with us. The collection of certain types of information may be necessary and/or required for governmental compliance (e.g., hunting, fishing or firearms licensing or purchasing), or otherwise necessary to complete transactions you request (e.g., credit applications). We may also collect other types of Non-Personal information, which do not identify you as an individual when not associated with any other personal information, such as demographic/lifestyle information, personal interests and product/buying preferences and which we may associate with your Personal Information. <br/><br/>


Information Collected From Third Parties. We may receive information you provide on behalf of third parties, or third parties provide on behalf of you, including but not limited to gift recipients, online registrations/purchases, ship-from-store, in-store pick-up, registries or as a result of your interactions with other users on our team sports or event Websites.<br/><br/>

We receive information from sources assisting us with (i) updating, enhancing, improving and/or analyzing our records or data; (ii) performing marketing and research services; or (iii) detecting fraud or theft. We may also acquire information about you from third parties with whom we have a relationship or otherwise contract with to obtain such information. Further, in the event we acquire a business, we may receive information from the seller of such business. Additionally, we may receive information from various consumer reporting agencies and related service providers. <br/><br/>

We also work with third-party service providers that provide us feedback about our Websites and analytics and general information about browsing patterns to improve our Websites and our Internet Marketing Channels. Analytics services such as Site Catalyst by Adobe Analytics provide services that analyze information regarding your visits to our Websites and may use cookies, web beacons and other tracking mechanisms (as described below) to collect this information. <br/><br/>


Cookies, Web Beacons and Automated Information. When you visit our Websites or interact with us through your computer or mobile device, (including if you utilize or interact with our Wi-Fi, Bluetooth or other technologies within our stores) we may collect "Automated Information" through Cookies, Web Beacons and other similar or related automated means (collectively, "Information Technologies"). "Cookies" are small text files sent to your device as you visit our Websites or utilize our Internet Marketing Channels and saved on your device via your browser or hard drive. "Web Beacons" (also known as pixel tags) are a form of technology placed within our Websites and our Internet Marketing Channels to monitor visits to certain pages within, interactions with, and the effectiveness of, our Websites and our Internet Marketing Channels. <br/><br/>

Automated Information we collect via Information Technologies includes, without limitation, internet protocol address(es), operating system(s) and browser specifics of your device, device characteristics, geographic (geo-location) information, user ID(s), clickstream data, and specifics regarding your interactions with (i.e., the path you take through) our Websites and our Internet Marketing Channels. Automated Information may also include your mobile device information (e.g., device model, operating system version, device date and time, unique device identifiers, mobile network information); how you use our Websites (including mobile applications) and Internet Marketing Channels, search terms, pages you visit on our Websites and application performance information. We may use Automated Information to associate you with any interaction you have with our Websites, including interaction across multiple computers, mobile devices, and In-Store services. In addition, while Automated Information does not generally identify or relate to you as an individual, we may associate these types of information with you as an individual. In addition, others might seek to do so, and we cannot guarantee that parties with whom we may share such information might not succeed in re-identifying or associating non-personal information with particular individuals; we cannot be responsible for such parties’ use of such information.<br/><br/>


Mobile Fitness Application Information. If you link your electronic fitness account which you have with a third party (such as Garmin, MapMyRun, Move, or Fitbit or any other third party that provides tracking services) to any Gear Me Family of Businesses’ account, you understand that such third party will share your information with us and our use of such information is governed by this Policy as well as the applicable privacy policy of the third-party tracking device company.<br/><br/>


Social Media Access. Gear Me engages with its current and prospective customers on multiple Internet Marketing Channels/social media services (e.g., Facebook, LinkedIn and Twitter). If you contact us on one of our Internet Marketing Channels, request customer service via social media or otherwise direct us to communicate with you via social media, we may contact you via direct message or use other social media tools to interact with you. In these instances, your interactions with us are governed by this Policy as well as the privacy policy of the social media platform you use. In addition, if you choose to access, link to, or log-in to our Websites or Internet Marketing Channels or otherwise communicate with us through a third-party social media service, you are granting us permission to access and use the information that you post or store on the applicable social media service in accordance with the privacy policy of that service and the privacy settings that are applicable to your account, and to store the user name and password you use to log-in to the applicable social media service. You further acknowledge that, by accessing or logging into our Websites or Internet Marketing Channels via a social media service, any information you provide to us may also become accessible to that service, subject to that service’s privacy policy. For additional information and more details on how you can manage the information provided to us by these social media services, please review the privacy settings applicable to your account with the applicable social media service. We do not control, and are not responsible for, the privacy practices of such services. You should consult the privacy policy of such services for additional information.<br/><br/>


In-Store Services.<br/>
In-Store Technology. Many Gear Me store locations offer free Wi-Fi services to visitors. Wi-Fi routers capture certain data from your devices that interact with the router. We also may enable Bluetooth or other technologies in our stores which enable us to detect the presence of your device in our store or provide operational insights. Unless we receive consent to use Wi-Fi data in a manner that identifies you or your device(s), Wi-Fi data is anonymously collected or de-identified.<br/>
Video Cameras. We use cameras in our stores for security, operational and marketing purposes. This technology may capture demographic and personal information about you.<br/>
Third Party Applications. Some third party service providers (such as Google) are able to combine your search history or other activity with the location functions within your device, to know that the same device that was used for searching on-line has also been at our store. These service providers provide us aggregate information as to how internet searches translate to customer store visits or other information.
Team Sports / Event Website Information. If you choose to create an account on one of our team sports or event Websites we host on behalf of a national, state or local sports governing body, league, club, team, or other organization (each, an “Organization”), or participate in an Organization that maintains an account or uses any such Website, you are granting us permission to share your information with such Organization and its affiliates and acknowledge that such Organization may share your information, including Personal Information, and content with others including publicly. You, an Organization and its affiliates, or other third parties, including other users of the Websites, may add information about you to the Websites (including but not limited to eligibility, roster, scheduling, performance and/or scoring information). You also acknowledge that we do not control the content or the manner in which the Organizations and others input, use, display or share the information posted or stored on the applicable Website, including with such Organization’s third party service providers. You should consult the privacy policy of such Organizations for additional information.<br/>
Your Choices<br/>
Email and Text Message Opt-Out. You may unsubscribe to future e-mail communications from any individual member of the Gear Me Family of Businesses by clicking on the unsubscribe link provided in our e-mail communications from such member. You may unsubscribe to text communications for any of our Family of Businesses by responding STOP to any marketing text message you receive from that member. Regardless of your decision to opt-out of future e-mail or text communications, we may still contact you to respond to an inquiry, regarding transactions and for transactional purposes (e.g., sales confirmations, shipping notifications, recalls, product information, service/reminder notices and account maintenance). In addition, you may use the methods set forth in the "Contact Customer Service" link below to opt-out or update certain preferences.<br/><br/>


Disabling Cookies. Based upon your interactions with our Websites and elsewhere on the internet and your (and your device's) interaction with our Internet Marketing Channels, we may personalize your experience via our Websites and via our Internet Marketing Channels. However, you have choices relating to how your device interacts with our Websites and our Internet Marketing Channels. You may choose to access our Websites and our Internet Marketing Channels without accepting certain Information Technologies on your device(s), and you may opt-out or modify certain elements that are tailored specifically to you and served to you based upon your browsing history. If you choose to restrict Information Technologies, you may access our Websites and Internet Marketing Channels, but you will NOT be able to take full advantage of certain features. You may also manage third party tracking by turning off cookies and changing your browser settings. Learn more at allaboutcookies.org. <br/><br/>


Interest-Based Advertising. We participate in interest-based advertising (IBA), also known as Online Behavioral Advertising. We use third-party advertising companies and networks to display ads tailored to your individual interests based on how you browse and shop online when you visit our Websites, Internet Marketing Channels and across other sites to serve you Gear Me advertisements across the Internet and through other channels. Some of these networks may be members of the Network Advertising Initiative (“NAI”) or participate in the Digital Advertising Alliance's ("DAA") Self-Regulatory Program. To learn more about your choices relating to members of the NAI visit their website at http://www.networkadvertising.org/choices/#completed. To learn more about your choices relating to networks that participate in the DAA Program, please visit http://www.aboutads.info. Please note, even if you choose to restrict, opt-out or modify your preferences, you may still see or receive Gear Me advertisements on our Websites, on our Internet Marketing Channels and on other sites, but such advertisements will not be based upon your browsing history.<br/><br/>

In addition, the browser on your device may offer you preferences regarding a website's collection of your information or your online activities over time and/or across different websites or online services. At this time, our Websites do not respond to these preferences, and our Websites may continue to collect information in the manner described in this Policy. However, you have the option to opt out of certain interest-based advertising. To learn more about interest based advertising or to opt-out of this type of advertising by participating members, visit the Network Advertising Initiative website and the Digital Advertising Alliance website. Options you select are browser and device-specific.<br/><br/>


Mobile Device and Application Preferences.<br/>
Text Messages. If you have opted-in to receive text messages from us, we may send text messages to the number provided that corresponds to your device. To opt out of mobile messaging from a member of the Gear Me Family of Businesses, reply “stop” to text messages received from such member. This will opt you out of all text message campaigns from that member only. <br/>
Push Notifications. You may at any time opt out from further push notifications by adjusting the permissions in your mobile device.
Geo-Location. You may at any time opt out from allowing us to access specific location data (latitude and longitude) of your device by adjusting the permissions in your mobile device you use to access our Websites and those of our third party partners: i.e. your mobile browser and Gear Me Sporting Goods mobile application.
In-App Notifications. All application users receive in-app notifications or “local notifications” generated by a device trigger. To halt those notifications, you may discontinue use of the application, or uninstall the application from your mobile device.<br/>
Updates and Uninstall Gear Me Mobile Application. Notification and automatic installation of application updates can be controlled through the preferences of the mobile device application “store” specific to your mobile device. You can stop all further collection of information by a Gear Me mobile application by uninstalling the Gear Me mobile application. You may use the standard uninstall process available as part of your mobile device or via the mobile application marketplace or network. Note: If you uninstall the mobile application from your device, the Gear Me unique identifier associated with your device will continue to be stored. If you re-install the application on the same device, Gear Me will be able to re-associate this identifier to your previous transactions and activities. If you have linked your electronic fitness account with a third party to a Gear Me mobile application, and you no longer want Gear Me to collect data from that electronic fitness account, you will need to disconnect that account from within the Gear Me application. Once that is done, you should uninstall the application from your mobile device.<br/>
In-Store Technology. You may opt out from allowing us to access your in-store location and prevent the acquisition of data obtained via Wi-Fi, Bluetooth, or other in-store technology by disabling the applicable technology on your device while in our stores so that such in-store technology will not detect your presence, or by uninstalling the Gear Me mobile application. To disable third party tracking while in our stores, log out of your third party accounts or disable location services when visiting our stores.<br/>
Team Sports / Event Websites. With respect to information entered on your behalf by third parties on our team sports or event Websites, contact the applicable Organization for options regarding the manner in which information is obtained, entered, displayed and managed.<br/>
How We Use Your Information<br/>
We do not sell, rent or trade your Personal Information to unaffiliated third parties without your prior consent, although we do share information in some circumstances as described below under “How We Share Your Information.” We use your information in ways consistent with this Policy and in the following ways:<br/>
Fulfilling, delivering and communicating with you regarding requests for information and orders for products and/or services.<br/>
Maintaining our loyalty programs.<br/>
Processing credit card applications and payments.<br/>
Evaluating your application for employment.<br/>
Administering surveys, sweepstakes, contests or promotions.<br/>
Registering and servicing your account(s).<br/>
Providing customer service.<br/>
Conducting research and analysis.<br/>
Alerting you to product, service and promotional information, including product recalls.<br/>
Helping us to improve and customize our products and services, Websites and Internet Marketing Channels.<br/>
To advertise our products and services to you and those of our partners that we think may be of interest to you.<br/>
Protecting the security and integrity of our stores, Websites, Internet Marketing Channels and overall business practices.<br/>
Enabling Organizations, account holders, and others to utilize the features and functionality and Services of our Websites, including facilitating communications among Organization participants, members and others.<br/>
As may otherwise be disclosed at the time of collection.<br/>
In doing so, we: <br/>
May combine certain Personal Information and non-personal information collected online and offline, including information collected from third parties;<br/>
May transfer or disclose such information within our Family of Businesses, including affiliates and subsidiaries; and<br/>
Will retain such information as needed to provide you products/services, comply with our legal obligations, resolve disputes, and enforce our agreements as we deem necessary, in our sole discretion.<br/>
We may combine all information we collect and we may disclose this information within the Gear Me Family of Businesses or with our service providers.<br/>
We use Automated Information and Information Technologies to recognize you and your preferences as you return to our Websites or utilize our Internet Marketing Channels and to tailor advertisements to you. We may display targeted ads to you through Internet Marketing Channels. These ads are sent to groups of people who share traits, such as likely commercial interests and demographics. For example, if you have expressed an interest in shopping for golf, we may target you with golf-related products. In addition to such tailoring, we use Automated Information to ensure that our online presence operates properly and efficiently for you and for your individual customer experience, to evaluate the use and benefit of such presence, and to support our Websites and our Internet Marketing Channels.<br/><br/>

We also use location services, which are built into the functionality of smart phones and other devices, in order to deliver marketing messages to you which are specific to your location. We may also use this data to track the effectiveness of local marketing campaigns, as well as our store location services.<br/><br/>

How We Share Your Information<br/>
We may share your information (including Personal Information) in ways consistent with this Policy and in the following ways:<br/>
With third party businesses and service providers that assist with our business operations, such as shipping vendors, billing or other payment vendors, payment card processors, marketing and research vendors and various companies that work with us to improve or provide our products and services and our data integrity. While we are not involved in the day-to-day operations of such businesses and providers, our agreements generally obligate them to use reasonable methods to keep any Personal Information safe and secure, and not use such Personal Information for purposes other than providing their applicable services. However, even if a third party business or service provider is performing business operations on our behalf, if you have an independent relationship with such third party business or service provider, its use of your information may be governed by the privacy policy that governs its independent relationship with you, and we are not responsible for such use.<br/>
As we deem necessary in the event (or partial event) of a corporate sale (asset or stock), merger, reorganization, change in corporate control, acquisition, insolvency, bankruptcy or similar event.<br/>
In connection with various co-branded, warranty, delivery/assembly and/or financial products or services, including our private label credit card(s).
To comply with applicable law or reasonable request based upon governmental regulation, court order, subpoena or similar related action.
As we deem necessary to protect the rights, property or safety of Gear Me, our customers, our associates or others, to prevent harm or loss, or in connection with an investigation or suspected or actual unlawful activity.<br/>
With respect to our team sports or event Websites, with the applicable Organization(s) on whose behalf the Website was established, and otherwise in connection with other features and functionality of such Websites. Such Organizations at their discretion may share your information with other participants, users and public viewers of the Websites. We suggest you review the privacy policies of such Organizations before deciding to share information relating to any such Organization.<br/>
As may otherwise be disclosed at the time of collection.<br/>
How to Update Your Information<br/>
For certain types of information, we offer you several ways to access or update such information:<br/>
If you have an account on one or more of our Websites, log-in to such account via the applicable Website. After securely entering your account, you can update your information and communication preferences by entering or revising the information as reflected therein. Note, some fields (such as password) are Website specific and if you have more than one account with us or registered on more than one Website, you will need to update each account.<br/>
You can Contact Customer Service to request updates to your account via the link at the bottom of each page of our Websites or by emailing us at Service@gearmesports.com or by calling us at 877-846-9997 for all Websites other than TSHQ. For TSHQ, you can reach us by email at support@Gear Meshq.com or by calling us at 844-374-TSHQ. You may also reach us by U.S. postal mail at 345 Court Street, Coraopolis, PA 15108, ATTN: Customer Service. Please provide your current and complete contact information with these requests.<br/>
If you are a ScoreCard member you can manage your preferences by logging in at MyScoreCardAccount.com.<br/>
If you participate in an Organization that uses our team sports or event Websites we host on behalf of an Organization, contact the Organization for options regarding the manner in which information is updated, edited displayed, or removed.<br/>
Please note:<br/>
We may refuse requests that are unreasonably repetitive, require disproportionate technical efforts, risk the privacy of others or are impractical.
After closing your account(s), or updating or revising any information within your account(s) or any Information Technologies associated with your device(s), we may not delete residual copies from our servers and may not remove information from our back-up system(s).<br/>
Closing or updating information relating to one Gear Me account (e.g., a Gear Me online shopping account) does not guarantee the closing or updating of a separate and different Gear Me account (e.g., a Golf Galaxy shopping account or a Gear Me loyalty card account). If you desire to close or update multiple Gear Me accounts, please log-in to each specific account to do so, or please contact the correct and applicable Customer Service department associated with each such account.<br/>
Closing an account will not affect information we obtain via Information Technologies.<br/>
Closing your account on our team sports or event Websites may not remove your information that the Organization and its affiliates, or other third parties, add about you to the applicable Websites (such as participant, eligibility, roster, scheduling, performance or scoring information).<br/>
In our efforts to maintain accurate and complete information, we utilize third party entities to assist us with updating and maintaining current contact information (e.g., National Change of Address or NCOA).<br/><br/>


Security<br/>
We use a variety of security measures to help protect your Personal Information and online transactions with us. Our Websites utilize encryption technology, including Secure Sockets Layer, to protect your Personal Information that we transport across the internet. Your personal online and mobile account(s) with us are password protected with restricted online access.<br/><br/>

Additionally, we use a variety of security measures to help protect your Personal Information that we maintain at our facilities. While no company can guarantee your information (including your Personal Information) will not be accessible by unauthorized individuals, we use physical, administrative and technical controls that are consistent with retail practices in an attempt to mitigate such risks.<br/><br/>

Children<br/>
Our Websites are "general audience" websites and not directed toward children under the age of 13. We do not knowingly collect Personal Information from children under the age of 13 without express parental consent; however if your child is registered with an Organization, such Organization may provide such information to us. BY PROVIDING SUCH INFORMATION TO AN ORGANIZATION YOU EXPRESSLY CONSENT TO THE ORGANIZATION PROVIDING SUCH INFORMATION TO US. If you are a parent or guardian and think we have unauthorized information about your child who is under the age of 13, please let us know by contacting us at Customer.Service@gearmesports.com, and for TSHQ, you can reach us by email at support@Gear Meshq.com or by calling us at 844-374-TSHQ.<br/><br/>

Third Party Links<br/>
Our Websites and our Internet Marketing Channels may link to other sites that we do not control. In addition, you may have visited our Website through a link or a banner advertisement on another site. In such cases, the site you linked from may collect information from people who click on the banner or link. These other sites are governed by their own privacy policies. Be sure to review these privacy policies when visiting such sites to see how they collect and use this information. We are not responsible for the content of privacy practices of such third parties' sites.<br/><br/>

Privacy Policy Updates<br/>
We may, from time to time, update and revise this Policy. Please periodically check this Policy for any updates or revisions. In the event we make a material change to how we use your information that would materially adversely affect your rights, we will provide you advance notice including by posting the proposed change on the Websites at least 30 days in advance of the effective date of the changes. We encourage you to keep the email and other addresses you provide to us current so that you may receive any additional notices we send to you regarding material changes to this Privacy Policy. If you do not agree to the changes and do not wish to be bound by such changes, you should stop using the Websites, and if you are a registered user, you may cancel your account with us within the thirty (30) day period by contacting us at Customer.Service@gearmesports.com for all Websites other than TSHQ. For TSHQ, you can reach us by email at support@Gear Meshq.com or by calling us at 844-374-TSHQ. You may also reach us by U.S. postal mail at 345 Court Street, Coraopolis, PA 15108, ATTN: Customer Service. Please provide your current and complete contact information with these requests.. Otherwise, the changes will take effect after thirty (30) days.<br/><br/>
</p>

<!--START OF FOOTER-->

<footer>
      <div class="section group">

    <div class="col span_1_of_3">
      Follow Us On Social Media
      <br/>
      <br/>
      <a href="https://www.twitter.com" target="blank"</a><img src="http://sulley.cah.ucf.edu/~al174346/group11/A/img/twitter.png" alt="Twitter Icon"  style="width: 37px; height: 37px;"> <p class="social">@GearMeSports</p>
      <br/>
      <a href="https://www.facebook.com" target="blank"</a><img src="http://sulley.cah.ucf.edu/~al174346/group11/A/img/facebook.png" alt="Facebook Icon"  style="width: 30px; height: 30px; margin-left: 3px;"> <p class="social">Gear Me Sports</p>
      <br/>
      <a href="https://www.instagram.com" target="blank"</a><img src="http://sulley.cah.ucf.edu/~al174346/group11/A/img/instagram.png" alt="Instagram Icon"  style="width: 36px; height: 36px;"> <p class="social">GearMeSport</p>

    </div>

    <div class="col span_1_of_3">
      <p class="policies">
        <a href="taxpolicy.php" class="policies">
        Tax Policy
      </a>
      </p>
      <br/>
      <br/>
      <p class="policies">
        <a href="returnpolicy.php" class="policies">
          Return Policy
        </a>
      </p>
      <br/>
      <br/>
      <p class="policies">
        <a href="privacypolicy.php" class="policies">
          Privacy Policy
        </a>
      </p>
      <br/>
      <br/>
      <p class="policies">
        <a href="shippingpolicy.php" class="policies">
          Shipping Policy and Charges
        </a>
      </p>
      <br/>
      <br/>
      <p class="policies">
        <a href="securitystatement.php" class="policies">
          Security Statement
        </a>
      </p>
    </div>

    <div class="col span_1_of_3">
      <div class="rights">

<p>Gear Me Sports ©  October 2017</p>
<br/>
<br/>
<p>“This site is not an offical site, it's an assignment for a UCF Digital Media course”</p>
<br/>
<br/>
<p>Designed by Group 11</p>
</div>
    </div>
  </div>

      </footer>
<!--END OF FOOTER-->




</body>

</html>
