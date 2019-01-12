<?php
/**
 * Created by PhpStorm.
 * User: livanrodriguez
 * Date: 2019-01-09
 * Time: 21:29
 */

namespace Livan2r\Deployer\Test;

class DeployerFunctionTest extends TestCase
{
    /**
     * Check that the multiply method returns correct result
     * @return void
     */
    public function testDeployerDeploy()
    {
        $this->json('POST','/deploy', [
            'payload' => $this->getPayloadSample()
        ])->assertStatus(200);
    }

    /**
     * Return a payload sample
     *
     * @return string
     */
    public function getPayloadSample()
    {
        return '
            {
              "zen": "Responsive is better than fast.",
              "hook_id": 77794142,
              "hook": {
                "type": "Repository",
                "id": 77794142,
                "name": "web",
                "active": true,
                "events": [
                  "push"
                ],
                "config": {
                  "content_type": "form",
                  "insecure_ssl": "0",
                  "url": "https://testing.buk.com.mx"
                },
                "updated_at": "2019-01-12T13:31:14Z",
                "created_at": "2019-01-12T13:31:14Z",
                "url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/hooks/77794142",
                "test_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/hooks/77794142/test",
                "ping_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/hooks/77794142/pings",
                "last_response": {
                  "code": null,
                  "status": "unused",
                  "message": null
                }
              },
              "repository": {
                "id": 158741798,
                "node_id": "MDEwOlJlcG9zaXRvcnkxNTg3NDE3OTg=",
                "name": "buk",
                "full_name": "AlfaomegaGrupoEditor/buk",
                "private": true,
                "owner": {
                  "login": "AlfaomegaGrupoEditor",
                  "id": 45267750,
                  "node_id": "MDEyOk9yZ2FuaXphdGlvbjQ1MjY3NzUw",
                  "avatar_url": "https://avatars2.githubusercontent.com/u/45267750?v=4",
                  "gravatar_id": "",
                  "url": "https://api.github.com/users/AlfaomegaGrupoEditor",
                  "html_url": "https://github.com/AlfaomegaGrupoEditor",
                  "followers_url": "https://api.github.com/users/AlfaomegaGrupoEditor/followers",
                  "following_url": "https://api.github.com/users/AlfaomegaGrupoEditor/following{/other_user}",
                  "gists_url": "https://api.github.com/users/AlfaomegaGrupoEditor/gists{/gist_id}",
                  "starred_url": "https://api.github.com/users/AlfaomegaGrupoEditor/starred{/owner}{/repo}",
                  "subscriptions_url": "https://api.github.com/users/AlfaomegaGrupoEditor/subscriptions",
                  "organizations_url": "https://api.github.com/users/AlfaomegaGrupoEditor/orgs",
                  "repos_url": "https://api.github.com/users/AlfaomegaGrupoEditor/repos",
                  "events_url": "https://api.github.com/users/AlfaomegaGrupoEditor/events{/privacy}",
                  "received_events_url": "https://api.github.com/users/AlfaomegaGrupoEditor/received_events",
                  "type": "Organization",
                  "site_admin": false
                },
                "html_url": "https://github.com/AlfaomegaGrupoEditor/buk",
                "description": "Pltaforma para la renta de libros",
                "fork": false,
                "url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk",
                "forks_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/forks",
                "keys_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/keys{/key_id}",
                "collaborators_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/collaborators{/collaborator}",
                "teams_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/teams",
                "hooks_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/hooks",
                "issue_events_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/issues/events{/number}",
                "events_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/events",
                "assignees_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/assignees{/user}",
                "branches_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/branches{/branch}",
                "tags_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/tags",
                "blobs_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/git/blobs{/sha}",
                "git_tags_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/git/tags{/sha}",
                "git_refs_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/git/refs{/sha}",
                "trees_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/git/trees{/sha}",
                "statuses_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/statuses/{sha}",
                "languages_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/languages",
                "stargazers_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/stargazers",
                "contributors_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/contributors",
                "subscribers_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/subscribers",
                "subscription_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/subscription",
                "commits_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/commits{/sha}",
                "git_commits_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/git/commits{/sha}",
                "comments_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/comments{/number}",
                "issue_comment_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/issues/comments{/number}",
                "contents_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/contents/{+path}",
                "compare_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/compare/{base}...{head}",
                "merges_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/merges",
                "archive_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/{archive_format}{/ref}",
                "downloads_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/downloads",
                "issues_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/issues{/number}",
                "pulls_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/pulls{/number}",
                "milestones_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/milestones{/number}",
                "notifications_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/notifications{?since,all,participating}",
                "labels_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/labels{/name}",
                "releases_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/releases{/id}",
                "deployments_url": "https://api.github.com/repos/AlfaomegaGrupoEditor/buk/deployments",
                "created_at": "2018-11-22T19:16:53Z",
                "updated_at": "2019-01-08T01:05:07Z",
                "pushed_at": "2019-01-12T13:19:42Z",
                "git_url": "git://github.com/AlfaomegaGrupoEditor/buk.git",
                "ssh_url": "git@github.com:AlfaomegaGrupoEditor/buk.git",
                "clone_url": "https://github.com/AlfaomegaGrupoEditor/buk.git",
                "svn_url": "https://github.com/AlfaomegaGrupoEditor/buk",
                "homepage": "https://testing.buk.com.mx",
                "size": 39144,
                "stargazers_count": 1,
                "watchers_count": 1,
                "language": "PHP",
                "has_issues": true,
                "has_projects": true,
                "has_downloads": true,
                "has_wiki": true,
                "has_pages": false,
                "forks_count": 0,
                "mirror_url": null,
                "archived": false,
                "open_issues_count": 3,
                "license": null,
                "forks": 0,
                "open_issues": 3,
                "watchers": 1,
                "default_branch": "master"
              },
              "sender": {
                "login": "livan2r",
                "id": 1828332,
                "node_id": "MDQ6VXNlcjE4MjgzMzI=",
                "avatar_url": "https://avatars3.githubusercontent.com/u/1828332?v=4",
                "gravatar_id": "",
                "url": "https://api.github.com/users/livan2r",
                "html_url": "https://github.com/livan2r",
                "followers_url": "https://api.github.com/users/livan2r/followers",
                "following_url": "https://api.github.com/users/livan2r/following{/other_user}",
                "gists_url": "https://api.github.com/users/livan2r/gists{/gist_id}",
                "starred_url": "https://api.github.com/users/livan2r/starred{/owner}{/repo}",
                "subscriptions_url": "https://api.github.com/users/livan2r/subscriptions",
                "organizations_url": "https://api.github.com/users/livan2r/orgs",
                "repos_url": "https://api.github.com/users/livan2r/repos",
                "events_url": "https://api.github.com/users/livan2r/events{/privacy}",
                "received_events_url": "https://api.github.com/users/livan2r/received_events",
                "type": "User",
                "site_admin": false
              }
            }    
        ';
    }
}
