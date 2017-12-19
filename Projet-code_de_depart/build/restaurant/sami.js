
window.projectVersion = 'master';

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href=".html">[Global Namespace]</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:AbstractModel" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="AbstractModel.html">AbstractModel</a>                    </div>                </li>                            <li data-name="class:Configuration" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Configuration.html">Configuration</a>                    </div>                </li>                            <li data-name="class:CreateaccountController" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="CreateaccountController.html">CreateaccountController</a>                    </div>                </li>                            <li data-name="class:Database" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Database.html">Database</a>                    </div>                </li>                            <li data-name="class:FlashBag" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="FlashBag.html">FlashBag</a>                    </div>                </li>                            <li data-name="class:Form" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Form.html">Form</a>                    </div>                </li>                            <li data-name="class:FrontController" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="FrontController.html">FrontController</a>                    </div>                </li>                            <li data-name="class:HomeController" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="HomeController.html">HomeController</a>                    </div>                </li>                            <li data-name="class:Http" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Http.html">Http</a>                    </div>                </li>                            <li data-name="class:InterceptingFilter" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="InterceptingFilter.html">InterceptingFilter</a>                    </div>                </li>                            <li data-name="class:MealController" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="MealController.html">MealController</a>                    </div>                </li>                            <li data-name="class:MicroKernel" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="MicroKernel.html">MicroKernel</a>                    </div>                </li>                            <li data-name="class:ModelInterface" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="ModelInterface.html">ModelInterface</a>                    </div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": ".html", "name": "", "doc": "Namespace "},
            {"type": "Interface",  "link": "InterceptingFilter.html", "name": "InterceptingFilter", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "InterceptingFilter", "fromLink": "InterceptingFilter.html", "link": "InterceptingFilter.html#method_run", "name": "InterceptingFilter::run", "doc": "&quot;&quot;"},
            
            {"type": "Interface",  "link": "ModelInterface.html", "name": "ModelInterface", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "ModelInterface", "fromLink": "ModelInterface.html", "link": "ModelInterface.html#method_create", "name": "ModelInterface::create", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "ModelInterface", "fromLink": "ModelInterface.html", "link": "ModelInterface.html#method_find", "name": "ModelInterface::find", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "ModelInterface", "fromLink": "ModelInterface.html", "link": "ModelInterface.html#method_delete", "name": "ModelInterface::delete", "doc": "&quot;&quot;"},
            
            
            {"type": "Class",  "link": "AbstractModel.html", "name": "AbstractModel", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "AbstractModel", "fromLink": "AbstractModel.html", "link": "AbstractModel.html#method___construct", "name": "AbstractModel::__construct", "doc": "&quot;&quot;"},
            
            {"type": "Class",  "link": "Configuration.html", "name": "Configuration", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Configuration", "fromLink": "Configuration.html", "link": "Configuration.html#method___construct", "name": "Configuration::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Configuration", "fromLink": "Configuration.html", "link": "Configuration.html#method_get", "name": "Configuration::get", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Configuration", "fromLink": "Configuration.html", "link": "Configuration.html#method_load", "name": "Configuration::load", "doc": "&quot;&quot;"},
            
            {"type": "Class",  "link": "CreateaccountController.html", "name": "CreateaccountController", "doc": "&quot;Objet permettant de cr\u00e9er un nouveau compte utilisateur&quot;"},
                                                        {"type": "Method", "fromName": "CreateaccountController", "fromLink": "CreateaccountController.html", "link": "CreateaccountController.html#method_httpGetMethod", "name": "CreateaccountController::httpGetMethod", "doc": "&quot;[httpGetMethod description]&quot;"},
                    {"type": "Method", "fromName": "CreateaccountController", "fromLink": "CreateaccountController.html", "link": "CreateaccountController.html#method_httpPostMethod", "name": "CreateaccountController::httpPostMethod", "doc": "&quot;[httpPostMethod description]&quot;"},
            
            {"type": "Class",  "link": "Database.html", "name": "Database", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Database", "fromLink": "Database.html", "link": "Database.html#method___construct", "name": "Database::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Database", "fromLink": "Database.html", "link": "Database.html#method_executeSql", "name": "Database::executeSql", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Database", "fromLink": "Database.html", "link": "Database.html#method_query", "name": "Database::query", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Database", "fromLink": "Database.html", "link": "Database.html#method_queryOne", "name": "Database::queryOne", "doc": "&quot;&quot;"},
            
            {"type": "Class",  "link": "FlashBag.html", "name": "FlashBag", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "FlashBag", "fromLink": "FlashBag.html", "link": "FlashBag.html#method___construct", "name": "FlashBag::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "FlashBag", "fromLink": "FlashBag.html", "link": "FlashBag.html#method_add", "name": "FlashBag::add", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "FlashBag", "fromLink": "FlashBag.html", "link": "FlashBag.html#method_fetchMessage", "name": "FlashBag::fetchMessage", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "FlashBag", "fromLink": "FlashBag.html", "link": "FlashBag.html#method_fetchMessages", "name": "FlashBag::fetchMessages", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "FlashBag", "fromLink": "FlashBag.html", "link": "FlashBag.html#method_hasMessages", "name": "FlashBag::hasMessages", "doc": "&quot;&quot;"},
            
            {"type": "Class",  "link": "Form.html", "name": "Form", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Form", "fromLink": "Form.html", "link": "Form.html#method_build", "name": "Form::build", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Form", "fromLink": "Form.html", "link": "Form.html#method___construct", "name": "Form::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Form", "fromLink": "Form.html", "link": "Form.html#method_addFormField", "name": "Form::addFormField", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Form", "fromLink": "Form.html", "link": "Form.html#method_bind", "name": "Form::bind", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Form", "fromLink": "Form.html", "link": "Form.html#method_getErrorMessage", "name": "Form::getErrorMessage", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Form", "fromLink": "Form.html", "link": "Form.html#method_getFormFields", "name": "Form::getFormFields", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Form", "fromLink": "Form.html", "link": "Form.html#method_hasFormFields", "name": "Form::hasFormFields", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Form", "fromLink": "Form.html", "link": "Form.html#method_setErrorMessage", "name": "Form::setErrorMessage", "doc": "&quot;&quot;"},
            
            {"type": "Class",  "link": "FrontController.html", "name": "FrontController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "FrontController", "fromLink": "FrontController.html", "link": "FrontController.html#method___construct", "name": "FrontController::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "FrontController", "fromLink": "FrontController.html", "link": "FrontController.html#method_buildContext", "name": "FrontController::buildContext", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "FrontController", "fromLink": "FrontController.html", "link": "FrontController.html#method_renderErrorView", "name": "FrontController::renderErrorView", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "FrontController", "fromLink": "FrontController.html", "link": "FrontController.html#method_renderView", "name": "FrontController::renderView", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "FrontController", "fromLink": "FrontController.html", "link": "FrontController.html#method_run", "name": "FrontController::run", "doc": "&quot;&quot;"},
            
            {"type": "Class",  "link": "HomeController.html", "name": "HomeController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "HomeController", "fromLink": "HomeController.html", "link": "HomeController.html#method_httpGetMethod", "name": "HomeController::httpGetMethod", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "HomeController", "fromLink": "HomeController.html", "link": "HomeController.html#method_httpPostMethod", "name": "HomeController::httpPostMethod", "doc": "&quot;&quot;"},
            
            {"type": "Class",  "link": "Http.html", "name": "Http", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Http", "fromLink": "Http.html", "link": "Http.html#method___construct", "name": "Http::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Http", "fromLink": "Http.html", "link": "Http.html#method_getRequestFile", "name": "Http::getRequestFile", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Http", "fromLink": "Http.html", "link": "Http.html#method_getRequestMethod", "name": "Http::getRequestMethod", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Http", "fromLink": "Http.html", "link": "Http.html#method_getRequestPath", "name": "Http::getRequestPath", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Http", "fromLink": "Http.html", "link": "Http.html#method_getUploadedFile", "name": "Http::getUploadedFile", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Http", "fromLink": "Http.html", "link": "Http.html#method_hasUploadedFile", "name": "Http::hasUploadedFile", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Http", "fromLink": "Http.html", "link": "Http.html#method_moveUploadedFile", "name": "Http::moveUploadedFile", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Http", "fromLink": "Http.html", "link": "Http.html#method_redirectTo", "name": "Http::redirectTo", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Http", "fromLink": "Http.html", "link": "Http.html#method_sendJsonResponse", "name": "Http::sendJsonResponse", "doc": "&quot;&quot;"},
            
            {"type": "Class",  "link": "InterceptingFilter.html", "name": "InterceptingFilter", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "InterceptingFilter", "fromLink": "InterceptingFilter.html", "link": "InterceptingFilter.html#method_run", "name": "InterceptingFilter::run", "doc": "&quot;&quot;"},
            
            {"type": "Class",  "link": "MealController.html", "name": "MealController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "MealController", "fromLink": "MealController.html", "link": "MealController.html#method_httpGetMethod", "name": "MealController::httpGetMethod", "doc": "&quot;&quot;"},
            
            {"type": "Class",  "link": "MicroKernel.html", "name": "MicroKernel", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "MicroKernel", "fromLink": "MicroKernel.html", "link": "MicroKernel.html#method___construct", "name": "MicroKernel::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "MicroKernel", "fromLink": "MicroKernel.html", "link": "MicroKernel.html#method_bootstrap", "name": "MicroKernel::bootstrap", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "MicroKernel", "fromLink": "MicroKernel.html", "link": "MicroKernel.html#method_loadClass", "name": "MicroKernel::loadClass", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "MicroKernel", "fromLink": "MicroKernel.html", "link": "MicroKernel.html#method_run", "name": "MicroKernel::run", "doc": "&quot;&quot;"},
            
            {"type": "Class",  "link": "ModelInterface.html", "name": "ModelInterface", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "ModelInterface", "fromLink": "ModelInterface.html", "link": "ModelInterface.html#method_create", "name": "ModelInterface::create", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "ModelInterface", "fromLink": "ModelInterface.html", "link": "ModelInterface.html#method_find", "name": "ModelInterface::find", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "ModelInterface", "fromLink": "ModelInterface.html", "link": "ModelInterface.html#method_delete", "name": "ModelInterface::delete", "doc": "&quot;&quot;"},
            
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});


