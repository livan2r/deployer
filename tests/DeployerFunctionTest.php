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
              "ref": "refs/heads/dev",
              "before": "77afc30441b0ac09021b52f90bbb25e010003d14",
              "after": "1823508d151c115bff860d12a820b3a38714a33b",
              "created": false,
              "deleted": false,
              "forced": false,
              "base_ref": null,
              "compare": "https://github.com/AlfaomegaGrupoEditor/buk/compare/77afc30441b0...1823508d151c",
              "commits": [
                {
                  "id": "1823508d151c115bff860d12a820b3a38714a33b",
                  "tree_id": "e780e39a612c2e51719cf9ecc3dd13907f969b95",
                  "distinct": true,
                  "message": "Envoy configured\n\nSigned-off-by: Livan A. Rodriguez <livan2r@alfaomega.com.mx>",
                  "timestamp": "2019-01-12T12:20:10-05:00",
                  "url": "https://github.com/AlfaomegaGrupoEditor/buk/commit/1823508d151c115bff860d12a820b3a38714a33b",
                  "author": {
                    "name": "Livan A. Rodriguez",
                    "email": "livan2r@alfaomega.com.mx"
                  },
                  "committer": {
                    "name": "Livan A. Rodriguez",
                    "email": "livan2r@alfaomega.com.mx"
                  },
                  "added": [
            
                  ],
                  "removed": [
            
                  ],
                  "modified": [
                    "Envoy.blade.example.php",
                    "permissions.sh"
                  ]
                }
              ],
              "head_commit": {
                "id": "1823508d151c115bff860d12a820b3a38714a33b",
                "tree_id": "e780e39a612c2e51719cf9ecc3dd13907f969b95",
                "distinct": true,
                "message": "Envoy configured\n\nSigned-off-by: Livan A. Rodriguez <livan2r@alfaomega.com.mx>",
                "timestamp": "2019-01-12T12:20:10-05:00",
                "url": "https://github.com/AlfaomegaGrupoEditor/buk/commit/1823508d151c115bff860d12a820b3a38714a33b",
                "author": {
                  "name": "Livan A. Rodriguez",
                  "email": "livan2r@alfaomega.com.mx"
                },
                "committer": {
                  "name": "Livan A. Rodriguez",
                  "email": "livan2r@alfaomega.com.mx"
                },
                "added": [
            
                ],
                "removed": [
            
                ],
                "modified": [
                  "Envoy.blade.example.php",
                  "permissions.sh"
                ]
              },
              "repository": {
                "id": 158741798,
                "node_id": "MDEwOlJlcG9zaXRvcnkxNTg3NDE3OTg=",
                "name": "buk",
                "full_name": "AlfaomegaGrupoEditor/buk",
                "private": true,
                "owner": {
                  "name": "AlfaomegaGrupoEditor",
                  "email": "contacto@alfaomega.com.mx",
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
                "url": "https://github.com/AlfaomegaGrupoEditor/buk",
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
                "created_at": 1542914213,
                "updated_at": "2019-01-08T01:05:07Z",
                "pushed_at": 1547313621,
                "git_url": "git://github.com/AlfaomegaGrupoEditor/buk.git",
                "ssh_url": "git@github.com:AlfaomegaGrupoEditor/buk.git",
                "clone_url": "https://github.com/AlfaomegaGrupoEditor/buk.git",
                "svn_url": "https://github.com/AlfaomegaGrupoEditor/buk",
                "homepage": "https://testing.buk.com.mx",
                "size": 39198,
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
                "default_branch": "master",
                "stargazers": 1,
                "master_branch": "master",
                "organization": "AlfaomegaGrupoEditor"
              },
              "pusher": {
                "name": "livan2r",
                "email": "livan2r@gmail.com"
              },
              "organization": {
                "login": "AlfaomegaGrupoEditor",
                "id": 45267750,
                "node_id": "MDEyOk9yZ2FuaXphdGlvbjQ1MjY3NzUw",
                "url": "https://api.github.com/orgs/AlfaomegaGrupoEditor",
                "repos_url": "https://api.github.com/orgs/AlfaomegaGrupoEditor/repos",
                "events_url": "https://api.github.com/orgs/AlfaomegaGrupoEditor/events",
                "hooks_url": "https://api.github.com/orgs/AlfaomegaGrupoEditor/hooks",
                "issues_url": "https://api.github.com/orgs/AlfaomegaGrupoEditor/issues",
                "members_url": "https://api.github.com/orgs/AlfaomegaGrupoEditor/members{/member}",
                "public_members_url": "https://api.github.com/orgs/AlfaomegaGrupoEditor/public_members{/member}",
                "avatar_url": "https://avatars2.githubusercontent.com/u/45267750?v=4",
                "description": ""
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
