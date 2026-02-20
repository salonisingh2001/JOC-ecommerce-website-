---
on:
  push: {}
  workflow_dispatch: {}

# Sirf READ permissions deni hain. 
# WRITE permission AI ko 'safe-outputs' se apne aap mil jayegi.
permissions:
  contents: read
  issues: read
  pull-requests: read
  deployments: read

safe-outputs:
  create-issue:
    title-prefix: "[AI-Report] "

engine: copilot
---
# Repository Health Report Agent

You are a repository assistant.

## Task 1: Basic Health Check
Identify all open pull requests and list the names of all branches. 

## Final Action
Create a new GitHub Issue with these findings.