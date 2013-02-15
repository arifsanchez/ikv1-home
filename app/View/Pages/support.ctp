<!-- DeskPRO Ticket Form -->
<div id="dp_helpdesk" style="display: none;"></div>
<script type="text/javascript">
    var DpHelpdesk_Options = DpHelpdesk_Options || {};

    // Uncomment this line to enable simple mode which hides
    // the sidebar and frame of the portal when embedded into your site
    //DpHelpdesk_Options.simpleMode = true;

    // Change this line to the default path to open on your helpdesk.
    // Here are a few examples:
    //DpHelpdesk_Options.loadPath = '/kb';
    //DpHelpdesk_Options.loadPath = '/news';
    //DpHelpdesk_Options.loadPath = '/feedback';
    //DpHelpdesk_Options.loadPath = '/new-ticket';

    DpHelpdesk_Options.protocol = ('https:' == document.location.protocol ? 'https' : 'http');
    DpHelpdesk_Options.deskproUrl = DpHelpdesk_Options.protocol + '://support.iktrust.com/';
    DpHelpdesk_Options.initialHeight = 700;
    DpHelpdesk_Options.containerId = 'dp_helpdesk';

    if (document.getElementsByTagName) {
        (function() {
            var scr   = document.createElement('script');
            scr.type  = 'text/javascript';
            scr.async = true;
            scr.src   = DpHelpdesk_Options.protocol + '://support.iktrust.com/web/javascripts/DeskPRO/User/HelpdeskWidget/HelpdeskWidget.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(scr);
        })();
    }
</script>
<!-- /DeskPRO Ticket Form -->

<!-- DeskPRO Chat -->
<script type="text/javascript">
    var DpChatWidget_Options = DpChatWidget_Options || {};
    DpChatWidget_Options.protocol     = ('https:' == document.location.protocol ? 'https' : 'http');
    DpChatWidget_Options.deskproUrl   = DpChatWidget_Options.protocol + '://support.iktrust.com/';
    DpChatWidget_Options.languageId   = 0;
    DpChatWidget_Options.startPhrase  = 'Chat with us';
    DpChatWidget_Options.resumePhrase = 'Open your chat';
    DpChatWidget_Options.tabLocation  = 'right';
    DpChatWidget_Options.btnStyle     = {
        bgColor: '#3F3F3F',
        border: '2px solid #727272',
        textColor: '#FFFFFF',
        textShadow: '0px 1px 2px #000000',
        font: 'bold 12px Arial, sans-serif'
    },
    DpChatWidget_Options.frameStyle   = {
        bgColor: '#2A69A9',
        textColor: '#FFFFFF'
    };

    DpChatWidget_Options.currentPageUrl = window.location;
    DpChatWidget_Options.referrerPageUrl = document.referrer;

    if (document.getElementsByTagName) {
        (function() {
            var scr   = document.createElement('script');
            scr.type  = 'text/javascript';
            scr.async = true;
            scr.src   = DpChatWidget_Options.protocol + '://support.iktrust.com/web/javascripts/DeskPRO/User/ChatWidget/ChatWidget.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(scr);
        })();
    }
</script>
<!-- /DeskPRO Chat -->